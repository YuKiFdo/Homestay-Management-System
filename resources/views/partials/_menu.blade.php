<div class="sidebar__menu-group">
    <ul class="sidebar_nav">
        {{-- Customer Area --}}
        <li class="menu-title mt-30">
            <span>Application</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/customers/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/customers/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-user-circle"></span>
                <span class="menu-text">{{ trans('menu.customers-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/customers/register') ? 'active':'' }}" href="{{ route('customer.view',app()->getLocale()) }}">{{ trans('menu.customers-add') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/customers/list') ? 'active':'' }}" href="{{ route('customer.list',app()->getLocale()) }}">{{ trans('menu.customers-list') }}</a></li>
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
                <li><a class="{{ Request::is(app()->getLocale().'/room/view') ? 'active':'' }}" href="{{ route('room.view',app()->getLocale()) }}">{{ trans('menu.room-add') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/room/list') ? 'active':'' }}" href="{{ route('room.list',app()->getLocale()) }}">{{ trans('menu.room-list') }}</a></li>-->
            </ul>
        </li>

        {{-- Admin Area --}}
        <li class="menu-title mt-30">
            <span>Administration</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/admin/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/admin/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-user-circle"></span>
                <span class="menu-text">{{ trans('menu.application-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/admin/application/config') ? 'active':'' }}" href="{{ route('application.config',app()->getLocale()) }}">{{ trans('menu.application-config') }}</a></li>
            </ul>
        </li>
        {{-- Dashboard --}}
        <li class="menu-title mt-30">
            <span>Project</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/dog/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/dog/*') ? 'active':'' }}">
                <span class="nav-icon fas fa-dog"></span>
                <span class="menu-text">{{ trans('menu.dog-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/dog/create') ? 'active':'' }}" href="{{ route('dog.create',app()->getLocale()) }}">{{ trans('menu.dog-add') }}</a></li>
                {{-- List --}}
                <li><a class="{{ Request::is(app()->getLocale().'/dog/list') ? 'active':'' }}" href="{{ route('dog.list',app()->getLocale()) }}"> {{ trans('menu.dog-list') }}</a></li>
            </ul>
        </li>

        <li class="menu-title mt-30">
            <span>Examples</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/dashboards/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/dashboards/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ trans('menu.dashboard-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-one') ? 'active':'' }}"><a href="{{ route('dashboard.demo_one',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-one') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-two') ? 'active':'' }}"><a href="{{ route('dashboard.demo_two',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-two') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-three')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_three',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-three') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-four')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_four',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-four') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-five')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_five',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-five') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-six')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_six',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-six') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-seven')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_seven',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-seven') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-eight')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_eight',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-eight') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-nine')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_nine',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-nine') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-ten')  ? 'active':'' }}"><a href="{{ route('dashboard.demo_ten',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-ten') }}</a></li>
            </ul>
        </li>
        <li class="has-child">
            <a href="#" class="">
                <span class="nav-icon uil uil-window-section"></span>
                <span class="menu-text">{{ trans('menu.layout-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="l_sidebar"><a href="#" data-layout="light">{{ trans('menu.layout-light-mode') }}</a></li>
                <li class="l_sidebar"><a href="#" data-layout="dark">{{ trans('menu.layout-dark-mode') }}</a></li>
                <li class="l_navbar"><a href="#" data-layout="top">{{ trans('menu.layout-top-menu') }}</a></li>
                <li class="layout"><a href="{{ Helper::get_translation_url( 'ar' ) }}">{{ trans('menu.layout-rtl') }}</a></li>
                <li class="layout"><a href="{{ Helper::get_translation_url( 'en' ) }}">{{ trans('menu.layout-ltr') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('changelog',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/changelog') ? 'active':'' }}">
                <span class="nav-icon uil uil-arrow-growth"></span>
                <span class="menu-text">{{ trans('menu.changelog-menu-title') }}</span>
                <span class="badge badge-info-10 menuItem rounded-pill">1.0.1</span>
            </a>
        </li>
        <li class="menu-title mt-30">
            <span>Applications</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/email/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/email/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-envelope"></span>
                <span class="menu-text">{{ trans('menu.email-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/email/inbox') ? 'active':'' }}" href="{{ route('email.inbox',app()->getLocale()) }}">{{ trans('menu.email-inbox') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/email/read') ? 'active':'' }}" href="{{ route('email.read',app()->getLocale()) }}">{{ trans('menu.email-read') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('chat',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/chat') ? 'active':'' }}">
                <span class="nav-icon uil uil-chat"></span>
                <span class="menu-text">{{ trans('menu.chat-menu-title') }}</span>
                <span class="badge badge-success menuItem rounded-circle">3</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/ecommerce/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-bag"></span>
                <span class="menu-text text-initial">{{ trans('menu.ecommerce-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('ecommerce.products',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/products') ? 'active':'' }}">{{ trans('menu.ecommerce-products') }}</a></li>
                <li><a href="{{ route('ecommerce.product_detail',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/product-detail') ? 'active':'' }}">{{ trans('menu.ecommerce-product-details') }}</a></li>
                <li><a href="{{ route('ecommerce.add_product',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/add-product') ? 'active':'' }}">{{ trans('menu.ecommerce-product-add') }}</a></li>
                <li><a href="{{ route('ecommerce.cart',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/cart') ? 'active':'' }}">{{ trans('menu.ecommerce-cart') }}</a></li>
                <li><a href="{{ route('ecommerce.orders',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/orders') ? 'active':'' }}">{{ trans('menu.ecommerce-orders') }}</a></li>
                <li><a href="{{ route('ecommerce.sellers',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/sellers') ? 'active':'' }}">{{ trans('menu.ecommerce-sellers') }}</a></li>
                <li><a href="{{ route('ecommerce.invoice',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/invoice') ? 'active':'' }}">{{ trans('menu.ecommerce-invoices') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/project/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/project/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-folder"></span>
                <span class="menu-text">{{ trans('menu.project-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('project.project_list',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/project/list') ? 'active':'' }}">{{ trans('menu.project-title') }}</a></li>
                <li><a href="{{ route('project.project_detail',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/project/project-detail') ? 'active':'' }}">{{ trans('menu.project-detail') }}</a></li>
                <li><a href="{{ route('project.create_project',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/project/create') ? 'active':'' }}">{{ trans('menu.create-project') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('calendar',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/calendar') ? 'active':'' }}">
                <span class="nav-icon uil uil-calendar-alt"></span>
                <span class="menu-text">{{ trans('menu.calendar-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/user/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-users-alt"></span>
                <span class="menu-text">{{ trans('menu.user-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('user.member',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/member') ? 'active':'' }}">{{ trans('menu.user-team') }}</a></li>
                <li><a href="{{ route('user.grid',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/grid') ? 'active':'' }}">{{ trans('menu.user-grid') }}</a></li>
                <li><a href="{{ route('user.list',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/list') ? 'active':'' }}">{{ trans('menu.user-list') }}</a></li>
                <li><a href="{{ route('user.grid_style',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/grid-style') ? 'active':'' }}">{{ trans('menu.user-grid-style') }}</a></li>
                <li><a href="{{ route('user.group',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/group') ? 'active':'' }}">{{ trans('menu.user-group') }}</a></li>
                <li><a href="{{ route('user.add',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/add') ? 'active':'' }}">{{ trans('menu.user-add') }}</a></li>
                <li><a href="{{ route('user.table',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/user/table') ? 'active':'' }}">{{ trans('menu.user-table') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/contact/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/contact/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-at"></span>
                <span class="menu-text">{{ trans('menu.contact-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/grid') ? 'active':'' }}" href="{{ route('contact.grid',app()->getLocale()) }}">{{ trans('menu.contact-grid') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/list') ? 'active':'' }}" href="{{ route('contact.list',app()->getLocale()) }}">{{ trans('menu.contact-list') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/create') ? 'active':'' }}" href="{{ route('contact.create',app()->getLocale()) }}">{{ trans('menu.contact-create') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('note',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/note') ? 'active':'' }}">
                <span class="nav-icon uil uil-clipboard-notes"></span>
                <span class="menu-text">{{ trans('menu.note-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('todo',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/todo') ? 'active':'' }}">
                <span class="nav-icon uil uil-check-square"></span>
                <span class="menu-text">{{ trans('menu.todo-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('kanban',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/kanban') ? 'active':'' }}">
                <span class="nav-icon uil uil-expand-arrows"></span>
                <span class="menu-text">{{ trans('menu.kanban-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/import_export/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/import_export/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-exchange"></span>
                <span class="menu-text">{{ trans('menu.ie-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/import') ? 'active':'' }}" href="{{ route('import_export.import',app()->getLocale()) }}">{{ trans('menu.ie-import') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/export') ? 'active':'' }}" href="{{ route('import_export.export',app()->getLocale()) }}">{{ trans('menu.ie-export') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/export-selected') ? 'active':'' }}" href="{{ route('import_export.export_selected',app()->getLocale()) }}">{{ trans('menu.ie-export-selected') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('filemanager',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/filemanager') ? 'active':'' }}">
                <span class="nav-icon uil uil-repeat"></span>
                <span class="menu-text">{{ trans('menu.filemanager-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('task',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/task') ? 'active':'' }}">
                <span class="nav-icon uil uil-lightbulb-alt"></span>
                <span class="menu-text">{{ trans('menu.task-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('bookmark',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/bookmark') ? 'active':'' }}">
                <span class="nav-icon uil uil-bookmark"></span>
                <span class="menu-text">{{ trans('menu.bookmark-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/social/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/social/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-apps"></span>
                <span class="menu-text">{{ trans('menu.social-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="nav-item"><a href="{{ route('social.profile',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/social/profile') ? 'active':'' }}">{{ trans('menu.social-profile') }}</a></li>
                <li><a href="{{ route('social.profile_settings',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/applications/social/profile-settings') ? 'active':'' }}">{{ trans('menu.social-profile-setting') }}</a></li>
                <!-- <li class="nav-item"><a class="nav-link {{ Request::is(app()->getLocale().'/applications/social/timeline') ? 'active':'' }}" href="{{ route('social.timeline',app()->getLocale()) }}">{{ trans('menu.social-timeline') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is(app()->getLocale().'/applications/social/activity') ? 'active':'' }}" href="{{ route('social.activity',app()->getLocale()) }}">{{ trans('menu.social-activity') }}</a></li> -->
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/pages/course/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/pages/course/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-books"></span>
                <span class="menu-text">{{ trans('menu.course-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/pages/course/list') ? 'active':'' }}" href="{{ route('pages.course.list',app()->getLocale()) }}">{{ trans('menu.course-list') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/pages/course/detail') ? 'active':'' }}" href="{{ route('pages.course.detail',app()->getLocale()) }}">{{ trans('menu.course-detail') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/support/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/support/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-user"></span>
                <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/support/support-ticket') ? 'active':'' }}" href="{{ route('support.support_ticket',app()->getLocale()) }}">{{ trans('menu.support-ticket') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/support/support-details') ? 'active':'' }}" href="{{ route('support.support_detail',app()->getLocale()) }}">{{ trans('menu.support-ticket-detail') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/support/new-ticket') ? 'active':'' }}" href="{{ route('support.new_ticket',app()->getLocale()) }}">{{ trans('menu.support-new-ticket') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/applications/job/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/applications/job/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-search"></span>
                <span class="menu-text">{{ trans('menu.job-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-search') ? 'active':'' }}" href="{{ route('job.job_search',app()->getLocale()) }}">{{ trans('menu.job-search') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-search-list') ? 'active':'' }}" href="{{ route('job.job_search_list',app()->getLocale()) }}">{{ trans('menu.job-search-list') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-detail') ? 'active':'' }}" href="{{ route('job.job_detail',app()->getLocale()) }}">{{ trans('menu.job-detail') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-apply') ? 'active':'' }}" href="{{ route('job.job_apply',app()->getLocale()) }}">{{ trans('menu.job-apply') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/table/*') || Request::is(app()->getLocale().'/pages/dynamic-table') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/table/*') || Request::is(app()->getLocale().'/pages/dynamic-table') ? 'active':'' }}">
                <span class="nav-icon uil uil-table"></span>
                <span class="menu-text">{{ trans('menu.table-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('table.basic',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/table/basic') ? 'active':'' }}">{{ trans('menu.table-basic') }}</a></li>
                <li><a href="{{ route('table.data',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/table/data') ? 'active':'' }}">{{ trans('menu.table-data') }}</a></li>
                <li><a href="{{ route('pages.dynamic_table',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/dynamic-table') ? 'active':'' }}">{{ trans('menu.dynamic-table-menu-title') }}</a></li>
            </ul>
        </li>
        <li class="menu-title mt-30">
            <span>CRUD</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/customer/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/customer/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-database"></span>
                <span class="menu-text">{{ trans('menu.customer-crud-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/customer/list') ? 'active':'' }}" href="{{ route('customer.list',app()->getLocale()) }}">{{ trans('menu.customer-view-all') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/customer/create') ? 'active':'' }}" href="{{ route('customer.create',app()->getLocale()) }}">{{ trans('menu.customer-add-new') }}</a></li>
            </ul>
        </li>
        <li class="menu-title mt-30">
            <span>Features</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/ui/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/ui/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-layers"></span>
                <span class="menu-text">{{ trans('menu.ui-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/alert') ? 'active':'' }}" href="{{ route('ui.alert',app()->getLocale()) }}">{{ trans('menu.ui-alert') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/avatar') ? 'active':'' }}" href="{{ route('ui.avatar',app()->getLocale()) }}">{{ trans('menu.ui-avatar') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/badge') ? 'active':'' }}" href="{{ route('ui.badge',app()->getLocale()) }}">{{ trans('menu.ui-badge') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/breadcrumps') ? 'active':'' }}" href="{{ route('ui.breadcrumps',app()->getLocale()) }}">{{ trans('menu.ui-breadcrumb') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/button') ? 'active':'' }}" href="{{ route('ui.button',app()->getLocale()) }}">{{ trans('menu.ui-button') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/card') ? 'active':'' }}" href="{{ route('ui.card',app()->getLocale()) }}">{{ trans('menu.ui-card') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/carousel') ? 'active':'' }}" href="{{ route('ui.carousel',app()->getLocale()) }}">{{ trans('menu.ui-carousel') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/checkbox') ? 'active':'' }}" href="{{ route('ui.checkbox',app()->getLocale()) }}">{{ trans('menu.ui-checkbox') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/collapse') ? 'active':'' }}" href="{{ route('ui.collapse',app()->getLocale()) }}">{{ trans('menu.ui-collapse') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/comments') ? 'active':'' }}" href="{{ route('ui.comments',app()->getLocale()) }}">{{ trans('menu.ui-comment') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/dashboard-base') ? 'active':'' }}" href="{{ route('ui.dashboard_base',app()->getLocale()) }}">{{ trans('menu.ui-dashboard-base') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/datepicker') ? 'active':'' }}" href="{{ route('ui.datepicker',app()->getLocale()) }}">{{ trans('menu.ui-date-picker') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/drawer') ? 'active':'' }}" href="{{ route('ui.drawer',app()->getLocale()) }}">{{ trans('menu.ui-drawer') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/drag-drop') ? 'active':'' }}" href="{{ route('ui.drag_drop',app()->getLocale()) }}">{{ trans('menu.ui-drag-drop') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/dropdown') ? 'active':'' }}" href="{{ route('ui.dropdown',app()->getLocale()) }}">{{ trans('menu.ui-dropdown') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/empty') ? 'active':'' }}" href="{{ route('ui.empty',app()->getLocale()) }}">{{ trans('menu.ui-empty') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/grid') ? 'active':'' }}" href="{{ route('ui.grid',app()->getLocale()) }}">{{ trans('menu.ui-grid') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/input') ? 'active':'' }}" href="{{ route('ui.input',app()->getLocale()) }}">{{ trans('menu.ui-input') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/list') ? 'active':'' }}" href="{{ route('ui.list',app()->getLocale()) }}">{{ trans('menu.ui-list') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/menu') ? 'active':'' }}" href="{{ route('ui.menu',app()->getLocale()) }}">{{ trans('menu.ui-menu') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/message') ? 'active':'' }}" href="{{ route('ui.message',app()->getLocale()) }}">{{ trans('menu.ui-message') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/modals') ? 'active':'' }}" href="{{ route('ui.modals',app()->getLocale()) }}">{{ trans('menu.ui-modal') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/notification') ? 'active':'' }}" href="{{ route('ui.notification',app()->getLocale()) }}">{{ trans('menu.ui-notification') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/page-header') ? 'active':'' }}" href="{{ route('ui.page_header',app()->getLocale()) }}">{{ trans('menu.ui-page-header') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/pagination') ? 'active':'' }}" href="{{ route('ui.pagination',app()->getLocale()) }}">{{ trans('menu.ui-pagination') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/progress') ? 'active':'' }}" href="{{ route('ui.progress',app()->getLocale()) }}">{{ trans('menu.ui-progress') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/radio') ? 'active':'' }}" href="{{ route('ui.radio',app()->getLocale()) }}">{{ trans('menu.ui-radio') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/rate') ? 'active':'' }}" href="{{ route('ui.rate',app()->getLocale()) }}">{{ trans('menu.ui-rate') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/result') ? 'active':'' }}" href="{{ route('ui.result',app()->getLocale()) }}">{{ trans('menu.ui-result') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/select') ? 'active':'' }}" href="{{ route('ui.select',app()->getLocale()) }}">{{ trans('menu.ui-select') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/skeleton') ? 'active':'' }}" href="{{ route('ui.skeleton',app()->getLocale()) }}">{{ trans('menu.ui-skeleton') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/slider') ? 'active':'' }}" href="{{ route('ui.slider',app()->getLocale()) }}">{{ trans('menu.ui-slider') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/spinner') ? 'active':'' }}" href="{{ route('ui.spinner',app()->getLocale()) }}">{{ trans('menu.ui-spinner') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/statistic') ? 'active':'' }}" href="{{ route('ui.statistic',app()->getLocale()) }}">{{ trans('menu.ui-statistic') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/steps') ? 'active':'' }}" href="{{ route('ui.steps',app()->getLocale()) }}">{{ trans('menu.ui-step') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/switch') ? 'active':'' }}" href="{{ route('ui.switch',app()->getLocale()) }}">{{ trans('menu.ui-switch') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/tab') ? 'active':'' }}" href="{{ route('ui.tab',app()->getLocale()) }}">{{ trans('menu.ui-tab') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/tags') ? 'active':'' }}" href="{{ route('ui.tags',app()->getLocale()) }}">{{ trans('menu.ui-tag') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/timeline') ? 'active':'' }}" href="{{ route('ui.timeline',app()->getLocale()) }}">{{ trans('menu.ui-timeline') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/timeline2') ? 'active':'' }}" href="{{ route('ui.timeline2',app()->getLocale()) }}">{{ trans('menu.ui-timeline2') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/timeline3') ? 'active':'' }}" href="{{ route('ui.timeline3',app()->getLocale()) }}">{{ trans('menu.ui-timeline3') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/timepicker') ? 'active':'' }}" href="{{ route('ui.timepicker',app()->getLocale()) }}">{{ trans('menu.ui-time-picker') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/ui/uploads') ? 'active':'' }}" href="{{ route('ui.uploads',app()->getLocale()) }}">{{ trans('menu.ui-upload') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/chart/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/chart/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-chart"></span>
                <span class="menu-text">{{ trans('menu.chart-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/chart/chartjs') ? 'active':'' }}" href="{{ route('chart.chartjs',app()->getLocale()) }}">{{ trans('menu.chart-js') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/chart/apexchart') ? 'active':'' }}" href="{{ route('chart.apexchart',app()->getLocale()) }}">{{ trans('menu.apex-chart') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/chart/google') ? 'active':'' }}" href="{{ route('chart.google',app()->getLocale()) }}">{{ trans('menu.chart-google') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/chart/peity') ? 'active':'' }}" href="{{ route('chart.peity',app()->getLocale()) }}">{{ trans('menu.chart-peity') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/form/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/form/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-keyhole-circle"></span>
                <span class="menu-text">{{ trans('menu.form-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/form/basic') ? 'active':'' }}" href="{{ route('form.basic',app()->getLocale()) }}">{{ trans('menu.form-basic') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/form/layout') ? 'active':'' }}" href="{{ route('form.layout',app()->getLocale()) }}">{{ trans('menu.form-layout') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/form/element') ? 'active':'' }}" href="{{ route('form.element',app()->getLocale()) }}">{{ trans('menu.form-element') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/form/component') ? 'active':'' }}" href="{{ route('form.component',app()->getLocale()) }}">{{ trans('menu.form-component') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/form/validation') ? 'active':'' }}" href="{{ route('form.validation',app()->getLocale()) }}">{{ trans('menu.form-validation') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/widget/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/widget/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-server"></span>
                <span class="menu-text">{{ trans('menu.widget-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/widget/chart') ? 'active':'' }}" href="{{ route('widget.chart',app()->getLocale()) }}">{{ trans('menu.widget-chart') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/widget/mixed') ? 'active':'' }}" href="{{ route('widget.mixed',app()->getLocale()) }}">{{ trans('menu.widget-mixed') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/widget/card') ? 'active':'' }}" href="{{ route('widget.card',app()->getLocale()) }}">{{ trans('menu.widget-card') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/wizard/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/wizard/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-square"></span>
                <span class="menu-text">{{ trans('menu.wizard-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('wizard.one',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/wizard/one') ? 'active':'' }}">{{ trans('menu.wizard-one') }}</a></li>
                <li><a href="{{ route('wizard.two',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/wizard/two') ? 'active':'' }}">{{ trans('menu.wizard-two') }}</a></li>
                <li><a href="{{ route('wizard.three',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/wizard/three') ? 'active':'' }}">{{ trans('menu.wizard-three') }}</a></li>
                <li><a href="{{ route('wizard.four',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/wizard/four') ? 'active':'' }}">{{ trans('menu.wizard-four') }}</a></li>
                <li><a href="{{ route('wizard.five',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/wizard/five') ? 'active':'' }}">{{ trans('menu.wizard-five') }}</a></li>
            </ul>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/icon/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/icon/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-grid"></span>
                <span class="menu-text">{{ trans('menu.icon-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('icon.unicon',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/icon/unicon') ? 'active':'' }}">{{ trans('menu.icon-unicon') }}</a></li>
                <li><a href="{{ route('icon.awesome',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/icon/awesome') ? 'active':'' }}">{{ trans('menu.icon-awesome') }}</a></li>
                <li><a href="{{ route('icon.lineawesome',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/icon/lineawesome') ? 'active':'' }}">{{ trans('menu.icon-line') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('editor',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/editor') ? 'active':'' }}">
                <span class="nav-icon uil uil-edit"></span>
                <span class="menu-text">{{ trans('menu.editor-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/map/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/map/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-map"></span>
                <span class="menu-text">{{ trans('menu.map-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('map.google',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/map/google') ? 'active':'' }}">{{ trans('menu.map-google') }}</a></li>
                <li><a href="{{ route('map.leaflet',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/map/leaflet') ? 'active':'' }}">{{ trans('menu.map-leaflet') }}</a></li>
                <li><a href="{{ route('map.vector',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/map/vector') ? 'active':'' }}">{{ trans('menu.map-vector') }}</a></li>
            </ul>
        </li>
        <li class="menu-title mt-30">
            <span>Pages</span>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/pages/gallery/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/pages/gallery/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-images"></span>
                <span class="menu-text">{{ trans('menu.gallery-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('pages.gallery1',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/gallery/gallery1') ? 'active':'' }}">{{ trans('menu.gallery-one') }}</a></li>
                <li>
                    <a href="{{ route('pages.gallery2',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/gallery/gallery2') ? 'active':'' }}">{{ trans('menu.gallery-two') }}</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('pages.pricing',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/pricing') ? 'active':'' }}">
                <span class="nav-icon uil uil-bill"></span>
                <span class="menu-text">{{ trans('menu.pricing-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.banner',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/banner') ? 'active':'' }}">
                <span class="nav-icon uil uil-thumbs-up"></span>
                <span class="menu-text">{{ trans('menu.banner-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.testimonial',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/testimonial') ? 'active':'' }}">
                <span class="nav-icon uil uil-book-open"></span>
                <span class="menu-text">{{ trans('menu.testimonial-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.faq',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/faq') ? 'active':'' }}">
                <span class="nav-icon uil uil-question-circle"></span>
                <span class="menu-text">{{ trans('menu.faq-menu-title') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('pages.search_result',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/search/result') ? 'active':'' }}">
                <span class="nav-icon uil uil-credit-card-search"></span>
                <span class="menu-text">{{ trans('menu.search-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.blank',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blank') ? 'active':'' }}">
                <span class="nav-icon uil uil-circle"></span>
                <span class="menu-text">{{ trans('menu.blank-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/pages/knowledge/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/pages/knowledge/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-window"></span>
                <span class="menu-text">{{ trans('menu.knowledge-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/base') ? 'active':'' }}" href="{{ route('pages.knowledge_base',app()->getLocale()) }}">{{ trans('menu.knowledge-base') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/all-articles') ? 'active':'' }}" href="{{ route('pages.all_articles',app()->getLocale()) }}">{{ trans('menu.knowledge-all-article') }}</a></li>
                <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/article') ? 'active':'' }}" href="{{ route('pages.article',app()->getLocale()) }}">{{ trans('menu.knowledge-single-article') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('pages.support',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/support/center') ? 'active':'' }}">
                <span class="nav-icon uil uil-headphones"></span>
                <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
            </a>
        </li>
        <li class="has-child {{ Request::is(app()->getLocale().'/pages/blog/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/pages/blog/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-images"></span>
                <span class="menu-text">{{ trans('menu.blog-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li><a href="{{ route('pages.blog.one',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blog/one') ? 'active':'' }}">{{ trans('menu.blog-style-one') }}</a></li>
                <li><a href="{{ route('pages.blog.two',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blog/two') ? 'active':'' }}">{{ trans('menu.blog-style-two') }}</a></li>
                <li><a href="{{ route('pages.blog.three',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blog/three') ? 'active':'' }}">{{ trans('menu.blog-style-three') }}</a></li>
                <li><a href="{{ route('pages.blog.detail',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/blog/detail') ? 'active':'' }}">{{ trans('menu.blog-detail') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('pages.terms',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/terms-and-condition') ? 'active':'' }}">
                <span class="nav-icon uil uil-question-circle"></span>
                <span class="menu-text">{{ trans('menu.terms-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.maintenance',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/maintenance') ? 'active':'' }}">
                <span class="nav-icon uil uil-airplay"></span>
                <span class="menu-text">{{ trans('menu.maintenance-menu-title') }}</span>
            </a>
        </li>
        <!-- <li>
            <a href="{{ route('pages.setting',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/setting') ? 'active':'' }}">
                <span class="nav-icon uil uil-setting"></span>
                <span class="menu-text">{{ trans('menu.setting-menu-title') }}</span>
            </a>
        </li> -->
        <li>
            <a href="{{ route('pages.404',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/404') ? 'active':'' }}">
                <span class="nav-icon uil uil-exclamation-triangle"></span>
                <span class="menu-text">{{ trans('menu.not-found-menu-title') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.coming_soon',app()->getLocale()) }}" class="{{ Request::is(app()->getLocale().'/pages/coming-soon') ? 'active':'' }}">
                <span class="nav-icon uil uil-sync"></span>
                <span class="menu-text">{{ trans('menu.coming-soon-menu-title') }}</span>
            </a>
        </li>
        @if(Request::is(app()->getLocale().'/dashboards/demo-five'))
            <div class="card sidebar__feature shadow-none bg-transparent border-0 py-sm-50 px-sm-35 text-center">
                <div class="px-15 mb-sm-35 mb-20">
                    <img src="{{ asset('assets/img/sidebar-feature.png') }}" alt="book">
                </div>
                <h3>Get More Feature by Upgrading</h3>
                <button type="button" class="btn btn-primary inline-flex mt-sm-35 mt-20">
                    Go Premium
                </button>
            </div>
        @endif
    </ul>
</div>
