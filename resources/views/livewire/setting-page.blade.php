<div>
    <section class="content px-3">
        <!-- Default box -->
        <div class="custom__box">
            <div class="card-header">
                <i class="fas fa-exclamation-triangle text-warning mr-2"></i>
                <span class="text-warning">Warning : Don't share API key with others</span>
            </div>
            <div class="card-body">
                <div class="col-12 settingOption rounded-top bg-warning" type="button" data-toggle="collapse"
                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <h5 class="ml-4 mt-1 font-weight-bold">
                        <i class="fas fa-shield-alt mr-2"></i>Privacy</h5>
                    <i class="fas fa-chevron-down mr-3"></i>
                </div>
                <div class="collapse optionContent rounded-bottom" id="collapseExample">
                    <fieldset disabled>
                        <div class="form-group ml-4">
                            <label>API Auth Code :</label>
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <input type="text" id="apiCode" class="form-control form-control-sm"
                                    value="{{ $user->auth_code }}">
                                <div class="input-group-prepend">
                                    <div class="input-group-text rounded-right" onclick="copyToClipboard('#apiCode')"><i
                                            class="fas fa-copy"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-4">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <h5 class="ml-4"><i class="fas fa-key mr-1"></i> Password Settings</h5>
                    <form class="settingForm ml-5 mt-3" wire:submit.prevent="changePassword">
                        <div class="form-group">
                            <label>New Password :</label>
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <input type="password" id="newPassword" class="form-control form-control-sm"
                                    placeholder="Change Your Password" wire:model.lazy="newPassword">
                                <div class="input-group-prepend">
                                    <div class="input-group-text rounded-right"><i class="fas fa-key"></i></div>
                                </div>
                            </div>
                            @error('newPassword') <span class="error error__msg">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password :</label>
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <input type="password" id="confirmPassword" class="form-control form-control-sm"
                                    placeholder="Confirm Your Password" wire:model.lazy="confirmPassword">
                                <div class="input-group-prepend">
                                    <div class="input-group-text rounded-right"><i class="fas fa-key"></i></div>
                                </div>
                            </div>
                            @error('confirmPassword') <span class="error error__msg">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <button class="btn btn-success btn-sm float-right" type="submit">
                                    <i class="fas fa-edit mr-2"></i>
                                    Change
                                    Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>