<div>
    <div class="login-box forgot-password-box">
        <div class="card">
            <div class="login-logo mt-3 mb-0">
                <a href="{{ URL::to('/') }}"><img src="{{ asset('assets/dist/img/logos/logo.png') }}" alt=""></a>
            </div>
            <div class="card-body login-card-body">
                <h4 class="text-center mb-2 text-dark">Account Recovery</h4>
                <p class="login-box-msg mb-3">To help keep your account safe, Bee CRM wants to make sure that it’s
                    really you trying to sign in....</p>

                <div class="forgot-password-box-content">
                    <h6 class="text-dark mb-2">Get a confirmation mail</h6>
                    <p class="text-dark mb-3">Check your mails and get a confirmation mail.</p>
                    <form wire:submit.prevent="forgotPassword">
                        <div wire:loading wire:target="forgotPassword">
                            <div class="loading" style="display: block">Processing...</div>
                        </div>
                        <div class="input-group mb-2">
                            <input name="email" class="form-control" placeholder="Email Address"
                                wire:model.lazy="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 ml-2">
                            <p class="text-success">
                                {{ $msg }}
                            </p>
                            @error('email') <span class="error error__msg"><i class="fas fa-exclamation-triangle"></i>
                                {{ $message }}</span> @enderror
                        </div>
                        <div class="row items-center mb-3">
                            <div class="col-8">
                                <div>
                                    <a href="{{ URL::to('/register') }}"
                                        class="btn btn-block text-xs text-start">Regiter an account</a>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>