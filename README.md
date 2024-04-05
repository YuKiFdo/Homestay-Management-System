<!-- # color red  -->
<h1 style="color:lightblue">Homestay Management System</h1>

Homestay Management System is a web application built with Blade (Laravel 10) and MSSQL. It helps in managing homestay bookings, sending notifications via email and SMS, and utilizes Bootstrap, jQuery, and CSS for the frontend.

## Features

- <b>User Authentication</b>: Secure user authentication system allowing users to sign up, log in, and manage their accounts.
- <b>Booking Management</b>: Manage homestay bookings, including creating, updating, and canceling bookings.
- <b>Room Management</b>: Manage homestay rooms, including adding, updating, and deleting rooms.
- <b>Food Management</b>: Manage food items and orders for homestay guests.
- <b>Activity Management</b>: Manage activities and events for homestay guests.
- <b>System Settings</b>: Manage system settings, including email and SMS configurations.
- <b>Guest Management</b>: Manage guest information, including adding, updating, and deleting guest details.
- <b>Notification System</b>: Sends notifications to users via email and SMS for booking confirmations, reminders, and updates.
- <b>Dashboard</b>: Provides an overview of the system, including the number of bookings, rooms, guests, and activities.
- <b>Reports</b>: Generate reports for bookings, rooms, guests, and activities.
- <b>Responsive Design</b>: Utilizes Bootstrap, jQuery, and Tailwind CSS for a responsive and modern user interface.

## Requirements

- PHP 7.4 or higher
- Laravel 10 or Higher
- MSSQL Database
- Composer
- Node.js

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/YuKiFdo/homestay-management-system.git
```

2. **Navigate to the project folder:**

```bash
cd homestay-management-system
```

3. **Install Composer dependencies:**

```bash
composer install
```

4. **Install NPM dependencies:**

```bash
npm install
```

5. **Create a new `.env` file:**

```bash
cp .env .env
```

6. **Generate an application key:**

```
php artisan key:generate
```

7. **Update the `.env` file with your database credentials:**

```
DB_CONNECTION=sqlsrv
DB_HOST=
DB_PORT=1433
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

8. **Run the database migrations:**

```
php artisan migrate
```

9. **Seed the database with default data:**

```
php artisan db:seed
```

10. **Compile the assets:**

```
npm run dev
```

11. **Start the Laravel development server:**

```
php artisan serve
```

12. **Visit the application in your browser:**

```
http://localhost:8000
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Screenshots

![Homestay Management System](https://user-images.githubusercontent.com/54688413/139593073-3b3b3b3b-1b3b-4b3b-8b3b-3b3b3b3b3b3b.png)

## Support

For any questions or concerns, please contact me at

- Email: [Sheahl Herath](mailto:sheahldev@outlook.com)
- GitHub: [YuKiFdo](https://github.com/YuKiFdo/)
  
## Contributors

@ShehalHerath
@LishaniChamathka
@SavidyaAnthony
@DewmiDeSilva

