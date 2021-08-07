<div class="login-box">

    @if (session()->has('message'))
    <div class="alert alert-{{ session('alertType') }} alert-dismissible fade show" role="alert">
        <strong>{{ session('title') }}!</strong> {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="login-logo">
        <a href="../../index2.html"><b>BEE </b><img src="{{ asset('assets/dist/img/logos/logo.png') }}" alt="logo"
                width="50px" class="logo__img"> CRM</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form wire:submit.prevent="login">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" wire:model.lazy="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" wire:model.lazy="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class="mb-1 text-center">
                <a href="forgot-password.html" class="hover__underlined">I forgot my password</a>
            </p>
            <p class="mb-0 text-center">
                <a href="{{ URL::to('/register') }}" class="hover__underlined">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->