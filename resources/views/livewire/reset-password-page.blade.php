<div>
    <div class="login-box">
        <div class="card py-2">
            <div class="login-logo mt-3 mb-0">
                <a href="{{ URL::to('/') }}"><img src="{{ asset('assets/dist/img/logos/logo.png') }}" alt=""></a>
            </div>
            <div class="card-body login-card-body px-4">
                <p class="login-box-msg">Reset Your Password to Continue.</p>
    
                <form class="mt-2">
                    <div class="input-group mb-2">
                        <input type="password" name="password" class="form-control" placeholder="New Password"
                            wire:model.lazy="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Confirm New Password"
                            wire:model.lazy="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
    
                <p class="mt-3 text-center px-1">
                    To make sure your account is secure, you'll be logged out from other devices once you set the password.
                </p>
            </div>
        </div>
    </div>
</div>