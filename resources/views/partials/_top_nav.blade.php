
<nav class="navbar navbar-light">
    <div class="navbar-left">
        <div class="logo-area">
            <a class="navbar-brand" href="{{ route('dashboard.main', app()->getLocale()) }}">
                {{-- Class = Dark --}}
                <img src="{{ asset('storage/' . config('application.logo')) }}" alt="img">
            </a>
            <a href="#" class="sidebar-toggle">
                <img class="svg" src="{{ asset('assets/img/svg/align-center-alt.svg') }}" alt="img"></a>
        </div>
    </div>


    <div class="navbar-right">
        <ul class="navbar-right__menu">
            <li class="nav-date-time">
                <span id="date-time">{{ date('Y-m-d H:i:s') }}</span>
            </li>
            <li class="nav-search">
                <a href="#" class="search-toggle">
                    <i class="uil uil-search"></i>
                    <i class="uil uil-times"></i>
                </a>
                <form action="/" class="search-form-topMenu">
                    <span class="search-icon uil uil-search"></span>
                    <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                        aria-label="Search">
                </form>
            </li>
            <li class="darkmode-toggle">
                <ul>
                    <li>
                        <a href="#" id="dark-mode-toggle">
                            <i class="uil uil-moon"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-author">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle"><img
                            src="{{ asset('storage/' . Auth::user()->profilepic) }}" alt="" class="rounded-circle">
                        @if (Auth::check())
                            <span class="nav-item__title">{{ Auth::user()->name }}<i
                                    class="las la-angle-down nav-item__arrow"></i></span>
                        @endif
                    </a>
                    <div class="dropdown-wrapper">
                        <div class="nav-author__info">
                            <div class="author-img">
                                <img src="{{ asset('storage/' . Auth::user()->profilepic) }}" alt=""
                                    class="rounded-circle">
                            </div>
                            <div>
                                @if (Auth::check())
                                    <h6 class="text-capitalize">{{ Auth::user()->name }}</h6>
                                @endif
                                <span>{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                        <div class="nav-author__options">
                            <ul>
                                <li>
                                    <a href="{{ route('application.profile', app()->getLocale()) }}">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user"
                                            class="svg"> Profile</a>
                                </li>
                            </ul>
                            <a href="" class="nav-author__signout"
                                onclick="event.preventDefault();document.getElementById('logout').submit();">
                                <img src="{{ asset('assets/img/svg/log-out.svg') }}" alt="log-out" class="svg">
                                Sign Out</a>
                            <form sy="display:none;" id="logout" action="{{ route('logout') }}"
                                method="POST">
                                @csrf
                                @method('post')
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navbar-right__mobileAction d-md-none">
            <a href="#" class="btn-search">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg feather-search">
                <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg feather-x">
            </a>
            <a href="#" class="btn-author-action">
                <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg"></a>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    try {
        let isDarkMode = localStorage.getItem('darkMode') === 'true';

        if (isDarkMode) {
            enableDarkMode();
        }


        $('#dark-mode-toggle').on('click', function() {
            if (isDarkMode) {
                disableDarkMode();
            } else {
                enableDarkMode();
            }
        });

        function enableDarkMode() {
            $('body').addClass('layout-dark');
            isDarkMode = true;
            localStorage.setItem('darkMode', 'true');
            $('#dark-mode-toggle').html('<i class="uil uil-sun"></i>');
            // sun color
            $('#dark-mode-toggle').css('color', '#f1c40f');
        }

        function disableDarkMode() {
            $('body').removeClass('layout-dark');
            isDarkMode = false;
            localStorage.setItem('darkMode', 'false');
            $('#dark-mode-toggle').html('<i class="uil uil-moon"></i>');
            // moon color - grey
            $('#dark-mode-toggle').css('color', '#95a5a6');
        }
    } catch (error) {
        console.error('Error accessing localStorage:', error);
    }
});
</script>

<script>
    // Function to update date-time element every second
    function updateDateTime() {
        var dateTimeElement = document.getElementById('date-time');
        var currentDate = new Date();
        var formattedDate = currentDate.getFullYear() + '-' + ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' + ('0' + currentDate.getDate()).slice(-2) + ' ' + ('0' + currentDate.getHours()).slice(-2) + ':' + ('0' + currentDate.getMinutes()).slice(-2) + ':' + ('0' + currentDate.getSeconds()).slice(-2);
        dateTimeElement.textContent = formattedDate;
    }

    // Update date-time element initially
    updateDateTime();

    // Update date-time element every second
    setInterval(updateDateTime, 1000);
</script>


