# Use an official PHP runtime as a parent image
FROM php:8.2-cli


# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql zip bcmath pcntl sockets

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install MSSQL extensions
RUN apt-get update && apt-get install -y gnupg2 apt-transport-https \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update \
    && ACCEPT_EULA=Y apt-get install -y msodbcsql17 mssql-tools unixodbc-dev \
    && pecl install pdo_sqlsrv sqlsrv \
    && docker-php-ext-enable pdo_sqlsrv sqlsrv

        # Copy composer files and install dependencies
COPY composer.json composer.lock ./

RUN composer install --no-scripts --no-autoloader



# Copy application files
COPY . .

# Set permissions
RUN chmod -R 755 storage bootstrap/cache

# Expose port 8000 for the Laravel development server
EXPOSE 8000

# Run laravel storage lin
RUN php artisan storage:link

# Run Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


