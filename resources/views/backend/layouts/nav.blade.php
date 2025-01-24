@php
    $activeRoute = Route::currentRouteName();
@endphp
<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                {{-- <img src="{{ asset('assets/images/logoncds.jpeg') }}" alt="" height="22"> --}}
            </span>
            <span class="logo-lg">
                <h3 style="color: #fff; padding-top:20px;">Xornametor Foundation</h3>
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
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
                    <a class="nav-link menu-link {{ $activeRoute === 'dashboard' ? 'active locked' : '' }}"
                        href="{{ route('dashboard') }}" role="button" aria-expanded="false"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Website
                        Components</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html#sidebarUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Site Components</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('view-banner') }}" class="nav-link"
                                            data-key="t-alerts">Banner</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-sermon-vidoe-link') }}"
                                            class="nav-link {{ $activeRoute === 'view-sermon-vidoe-link' ? 'active locked' : '' }}"
                                            data-key="t-alerts">Sermon Vidoes Links</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-appointment') }}" class="nav-link"
                                            data-key="t-colors">Appointment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-article') }}" class="nav-link"
                                            data-key="t-badges">Article</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-participant') }}" class="nav-link"
                                            data-key="t-buttons">Chaplains</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('gallery-view') }}" class="nav-link" data-key="t-colors">
                                            View
                                            Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-gallery') }}" class="nav-link" data-key="t-colors">Add
                                            Gallery</a>
                                    </li>
                                    <li class="nav-item {{ Route::is('view-communities') ? 'active' : '' }}">
                                        <a href="{{ route('view-communities') }}" class="nav-link"
                                            data-key="t-colors">Community</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Contact Us </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-news') }}" class="nav-link"
                                            data-key="t-carousel">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-events') }}" class="nav-link"
                                            data-key="t-carousel">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('view-commandants') }}" class="nav-link"
                                            data-key="t-dropdowns">Commandant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Joining
                                            Instructions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Settings</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html#sidebarIcons" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Setting</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link" data-key="t-remix">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link"
                                    data-key="t-boxicons">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
