<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('home') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('home') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('user.add') || request()->routeIs('user.all') || request()->routeIs('user.edit') || request()->routeIs('user.free') || request()->routeIs('user.premium') ? 'collapsed active' : '' }}"
                       href="#sidebarApps" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-user-line"></i> <span data-key="t-apps">Users</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('user.add') || request()->routeIs('user.all') || request()->routeIs('user.edit') || request()->routeIs('user.free') || request()->routeIs('user.premium') ? 'show' : '' }}"
                         id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.add') }}"
                                   class="nav-link {{ request()->routeIs('user.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New User</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.all') }}" class="nav-link {{ request()->routeIs('user.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.free') }}" class="nav-link {{ request()->routeIs('user.free') ? 'active' : '' }}" data-key="t-chat">Free Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.premium') }}" class="nav-link {{ request()->routeIs('user.premium') ? 'active' : '' }}" data-key="t-chat">Premium Users</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('carrot.add') || request()->routeIs('carrot.all') || request()->routeIs('carrot.edit') ? 'collapsed active' : '' }}"
                       href="#sidebarCarrots" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCarrots">
                        <i class="ri-gallery-line"></i> <span data-key="t-apps">Carrots</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('carrot.add') || request()->routeIs('carrot.all') || request()->routeIs('carrot.edit') ? 'show' : '' }}"
                         id="sidebarCarrots">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('carrot.add') }}"
                                   class="nav-link {{ request()->routeIs('carrot.add') ? 'active' : '' }}"
                                   data-key="t-chat">Add New Carrot</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('carrot.all') }}" class="nav-link {{ request()->routeIs('carrot.all') ? 'active' : '' }}" data-key="t-calendar">
                                    All Carrots
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
