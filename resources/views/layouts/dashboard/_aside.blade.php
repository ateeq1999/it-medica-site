<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p class="hidden-xs">{{ auth()->user()->first_name }}  {{ auth()->user()->last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>@lang('site.status') </a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
       
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
            @if (auth()->user()->hasPermission('read_users'))
            <li><a href="{{route('dashboard.users.index')}}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
            @endif
     
            @if (auth()->user()->hasPermission('read_services'))
            <li><a href="{{ route('dashboard.services.index') }}"><i class="fa fa-book"></i><span>@lang('site.services')</span></a></li>
            @endif
            @if (auth()->user()->hasPermission('read_services'))
            <li><a href="{{ route('dashboard.blocks.index') }}"><i class="fa fa-book"></i><span>@lang('site.blocks')</span></a></li>
            @endif
            @if (auth()->user()->hasPermission('read_categories'))
            <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-book"></i><span>@lang('site.categories')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_products'))
            <li><a href="{{route('dashboard.products.index')}}"><i class="fa fa-th"></i><span>@lang('site.products')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_clients'))
            <li><a href="{{route('dashboard.clients.index')}}"><i class="fa fa-th"></i><span>@lang('site.clients')</span></a></li>
            @endif
            @if (auth()->user()->hasPermission('read_orders'))
            <li><a href="{{route('dashboard.orders.index')}}"><i class="fa fa-th"></i><span>@lang('site.orders')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_projects'))
                <li><a href="{{ route('dashboard.projects.index') }}"><i class="fa fa-th"></i><span>@lang('site.projects')</span></a></li>
            @endif
        </ul>
    </section>
</aside>

