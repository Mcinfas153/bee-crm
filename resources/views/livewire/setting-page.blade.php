<div>
    <section class="content px-3">
        <!-- Default box -->
        <div class="custom__box">
            @can('adminView', App\Models\User::class)
            @endcan
            <div class="card-body">
                @can('adminView', App\Models\User::class)
                <div class="col-12 settingOption rounded-bottom bg-warning" type="button" data-toggle="collapse"
                    data-target="#privacySettings" aria-expanded="false" aria-controls="privacySettings">
                    <h6 class="ml-4 mt-1 font-weight-semibold">
                        <i class="fas fa-shield-alt mr-2"></i>PRIVACY
                    </h6>
                    <i class="fas fa-chevron-down mr-3"></i>
                </div>
                <div class="collapse optionContent" id="privacySettings">
                    <fieldset disabled>
                        <div class="form-group ml-4">
                            <label class="mt-2">API Auth Code :</label>
                            <br>
                            <label class="text-warning mb-3"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Don't share the API Key with Others</label>
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
                @endcan
                <div class="mt-4">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="col-12 settingOption rounded-bottom bg-warning" type="button" data-toggle="collapse"
                    data-target="#passwordSettings" aria-expanded="false" aria-controls="passwordSettings">
                        <h6 class="ml-4 mt-1 font-weight-semibold">
                            <i class="fas fa-key mr-1"></i> PASSWORD SETTINGS
                        </h6>
                        <i class="fas fa-chevron-down mr-3"></i>
                    </div>
                    <div class="collapse optionContent" id="passwordSettings">
                        <form class="settingForm ml-2 mt-3" wire:submit.prevent="changePassword">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>New Password :</label>
                                    <div class="input-group mb-2 mr-sm-2 col-md-12 text-center">
                                        <input type="password" id="newPassword" class="form-control form-control-sm"
                                            placeholder="Change Your Password" wire:model.lazy="newPassword">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text rounded-right"><i class="fas fa-key"></i></div>
                                        </div>
                                    </div>
                                    @error('newPassword') <span class="error error__msg">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm New Password :</label>
                                    <div class="input-group mb-2 mr-sm-2 col-md-12 text-center">
                                        <input type="password" id="confirmPassword" class="form-control form-control-sm"
                                            placeholder="Confirm Your Password" wire:model.lazy="confirmPassword">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text rounded-right"><i class="fas fa-key"></i></div>
                                        </div>
                                    </div>
                                    @error('confirmPassword') <span class="error error__msg">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-12 mt-3">
                                    <div class="mb-1 mr-sm-2 col-md-12 text-center">
                                        <button class="btn btn-warning" type="submit">
                                            <i class="fas fa-edit mr-1"></i>
                                            Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>