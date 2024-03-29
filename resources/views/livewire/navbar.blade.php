<div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ URL::to('/dashboard') }}" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item mt-1">
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Profile Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" wire:click="Profile" href="{{ URL::to('/profile') }}" title="Profile">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </a>
            </li>

            <!-- Sign out Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" wire:click="logout" href="javascript:void(0)" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
            {{-- <!-- Expand Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li> --}}
        </ul>
    </nav>
</div>