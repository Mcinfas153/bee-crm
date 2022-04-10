<div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ URL::to('/dashboard') }}" class="brand-link">
            <img src="{{ asset('assets/dist/img/logos/full-logo.png') }}" alt="Bee Logo"
                class="brand-image img-circle elevation-3 bg-light">
            <span class="brand-text font-weight-semibold">{{ config('application.webAppName') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- SidebarSearch Form -->
            <div class="form-inline mt-2">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    @can('adminView', App\Models\User::class)
                    <li class="nav-item sideNavItem rounded">
                        <a href="{{ URL::to('/dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    @endcan
                    <li class="nav-item sideNavItem rounded">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fas fa-project-diagram"></i>
                            <p>
                                Leads
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            {{-- <li class="nav-item rounded">
                                <a href="{{ URL::to('/add-lead') }}" class="nav-link navDropItem">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Add Lead</p>
                                </a>
                            </li> --}}
                            <li class="nav-item rounded">
                                <a href="{{ URL::to('/add-lead') }}" class="nav-link navDropItem">
                                    <i class="fas fa-magnet nav-icon"></i>
                                    <p>Add Lead</p>
                                </a>
                                <a href="{{ URL::to('/leads') }}" class="nav-link navDropItem">
                                    <i class="fas fa-tasks nav-icon"></i>
                                    <p>Recent Leads</p>
                                </a>
                                <a href="{{ URL::to('/all-leads') }}" class="nav-link navDropItem">
                                    <i class="fas fa-tasks nav-icon"></i>
                                    <p>All Leads</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @can('adminView', App\Models\User::class)
                    <li class="nav-item sideNavItem rounded">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item rounded">
                                <a href="{{ URL::to('/add-user') }}" class="nav-link navDropItem">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item rounded">
                                <a href="{{ URL::to('/users') }}" class="nav-link navDropItem">
                                    <i class="fas fa-address-card nav-icon"></i>
                                    <p>All Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('adminView', App\Models\User::class)
                    <li class="nav-item sideNavItem rounded">
                        <a href="{{ URL::to('/company') }}" class="nav-link">
                            <i class="fas fa-building nav-icon"></i>
                            <p>
                                Company Profile
                            </p>
                        </a>
                    </li>
                    @endcan
                    <li class="nav-item sideNavItem rounded">
                        <a href="{{ URL::to('/profile') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                User Profile
                            </p>
                        </a>
                    </li>
                    @can('adminView', App\Models\User::class)
                    <li class="nav-item sideNavItem rounded">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fab fa-cc-mastercard"></i>
                            <p>
                                Payments
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item rounded">
                                <a href="{{ URL::to('/plans') }}" class="nav-link navDropItem">
                                    <i class="fas fa-cubes nav-icon"></i>
                                    <p>Bee Plans</p>
                                </a>
                            </li>
                            <li class="nav-item rounded">
                                <a href="{{ URL::to('/landingpage-plans') }}" class="nav-link navDropItem">
                                    <i class="fas fa-cubes nav-icon"></i>
                                    <p>Inproto Plans</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item rounded">
                                <a href="{{ URL::to('/instapage-plans') }}" class="nav-link navDropItem">
                                    <i class="fas fa-cubes nav-icon"></i>
                                    <p>Instapage Plans</p>
                                </a>
                            </li> --}}
                            <li class="nav-item sideNavItem rounded">
                                <a href="{{ URL::to('/invoices') }}" class="nav-link navDropItem">
                                    <i class="fas fa-file-invoice nav-icon"></i>
                                    <p>Invoices</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    <li class="nav-item sideNavItem rounded">
                        <a href="{{ URL::to('/setting') }}" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                    <li class="nav-item sideNavItem rounded" wire:click="logout">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>