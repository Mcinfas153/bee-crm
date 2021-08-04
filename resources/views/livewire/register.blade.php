<div>
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ URL::to('/') }}"><b>BEE </b><img src="{{ asset('assets/dist/img/logos/logo.png') }}" alt="logo"
                    width="50px" class="logo__img"> CRM</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form wire:submit.prevent="register">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" wire:model.lazy="fullname" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('fullname') <span class="error">{{ $message }}</span> @enderror
                    </div>
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password"
                            wire:model.lazy="confirmPassword">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree"
                                    wire:model.lazy="agreed">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                        @error('agreed') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
                <div class="text-center mt-1">
                    <a href="{{ URL::to('/login') }}" class="text-center hover__underlined">I already have a
                        membership</a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>
<!-- /.register-box -->