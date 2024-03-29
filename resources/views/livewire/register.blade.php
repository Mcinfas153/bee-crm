<div>
    <div class="register-box">
        @if (session()->has('message'))
        <div class="alert alert-{{ session('alertType') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('title') }}!</strong> {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="card">
            <div class="register-logo mt-3">
                <img src="{{ asset('assets/dist/img/logos/logo.png') }}" alt="logo" class="logo__img"></a>
            </div>
            <div class="card-body register-card-body mt-0">
                <p class="login-box-msg">Register a new membership</p>

                <form wire:submit.prevent="register">
                    <div wire:loading wire:target="register">
                        <div class="loading" style="display: block">Processing...</div>
                    </div>
                    <div class="input-group">
                        <input type="text" name="fullname" class="form-control" placeholder="Full name"
                            wire:model.lazy="fullname" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 ml-2">
                        @error('fullname') <span class="error error__msg"> <i class="fas fa-exclamation-triangle"></i>
                            {{ $message }}</span> @enderror
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            wire:model.lazy="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 ml-2">
                        @error('email') <span class="error error__msg"> <i class="fas fa-exclamation-triangle"></i>
                            {{ $message }}</span> @enderror
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"
                            wire:model.lazy="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 ml-2">
                        @error('password') <span class="error error__msg"> <i class="fas fa-exclamation-triangle"></i>
                            {{ $message }}</span> @enderror
                    </div>
                    <div class="input-group">
                        <input type="password" name="confirmPassword" class="form-control" placeholder="Retype password"
                            wire:model.lazy="confirmPassword">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 ml-2">
                        @error('confirmPassword') <span class="error error__msg"> <i
                                class="fas fa-exclamation-triangle"></i> {{ $message }}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="agreeTerms" id="agreeTerms" name="terms" value="agree"
                                    wire:model.lazy="agreed">
                                <label for="agreeTerms" class="mb-3 checkBox">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="mt-2 ml-2">
                        @error('agreed') <span class="error error__msg"><i class="fas fa-exclamation-triangle"></i>
                            {{ $message }}</span> @enderror
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    {{-- <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a> --}}
                </div>
                <div class="text-center mt-1">
                    <a href="{{ URL::to('/login') }}" class="text-center hover__underlined">I already have an
                        account</a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>
<!-- /.register-box -->