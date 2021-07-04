<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">{{__('Core')}}</div>
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('Dashboard')}}
            </a>
            <a class="nav-link" href="{{route('admin.users')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{__('Users')}}
            </a>
            @include('admin.layout.sidebar_components.dropdown')
            @include('admin.layout.sidebar_components.double_dropdown')
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Username
    </div>
</nav>