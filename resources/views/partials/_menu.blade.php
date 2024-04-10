<div class="sidebar__menu-group">
    <ul class="sidebar_nav">
        {{-- Dashboard --}}
        @if (Auth::user()->type == 'admin')
        <li  class="{{ Request::is(app()->getLocale().'/dashboards/*') ? 'active':'' }}">
            <a class="{{ Request::is(app()->getLocale().'/dashboards/*') ? 'active':'' }}"  href="{{ route('dashboard.main',app()->getLocale()) }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ trans('menu.dashboard-menu-title') }}</span>
            </a>
        </li>
        @endif
        {{-- Customer Area --}}
        <li class="menu-title mt-30">
            <span>Application</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/customer/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/customer/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-user-circle"></span>
                <span class="menu-text">{{ trans('menu.customers-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/customer/view') ? 'active':'' }}"><a href="{{ route('customer.view',app()->getLocale()) }}">{{ trans('menu.customers-add') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/customer/list') ? 'active':'' }}"> <a href="{{ route('customer.list',app()->getLocale()) }}">{{ trans('menu.customers-list') }}</a></li>
            </ul>
        </li>

        {{-- Room Area --}}
        <li class="has-child {{ Request::is(app()->getLocale().'/room/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/room/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-home"></span>
                <span class="menu-text">{{ trans('menu.room-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/room/list') ? 'active':'' }}"> <a href="{{ route('room.list',app()->getLocale()) }}">{{ trans('menu.room-list') }}</a></li>
            </ul>
        </li>

        {{-- Booking Area --}}
        <li class="has-child {{ Request::is(app()->getLocale().'/booking/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/booking/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-bookmark"></span>
                <span class="menu-text">{{ trans('menu.booking-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/booking/view') ? 'active':'' }}"> <a  href="{{ route('booking.view',app()->getLocale()) }}">{{ trans('menu.booking-add') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/booking/list') ? 'active':'' }}"> <a  href="{{ route('booking.list',app()->getLocale()) }}">{{ trans('menu.booking-list') }}</a></li>
            </ul>
        </li>

        {{-- Admin Area --}}
        @if (Auth::user()->type == 'admin')
        <li class="menu-title mt-30">
            <span>Administration</span>
        </li>
        {{-- room --}}
        <li class="has-child {{ Request::is(app()->getLocale().'/admin/room/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/admin/room/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-home"></span>
                <span class="menu-text">{{ trans('menu.room-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
            <li class="{{ Request::is(app()->getLocale().'/admin/room/view') ? 'active':'' }}"> <a  href="{{ route('room.view',app()->getLocale()) }}">{{ trans('menu.room-add') }}</a></li>
        </ul>
        </li>


        <li class="has-child {{ Request::is(app()->getLocale().'/application/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/application/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-user-circle"></span>
                <span class="menu-text">{{ trans('menu.application-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/application/config') ? 'active':'' }}"> <a  href="{{ route('application.config',app()->getLocale()) }}">{{ trans('menu.application-config') }}</a></li>
            </ul>
        </li>
        @endif

    </ul>
</div>
