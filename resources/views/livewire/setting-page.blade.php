<div>
    <section class="content p-2">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-exclamation-triangle text-warning mr-2"></i>
                <span class="text-warning">Warning : Don't share API key with others</span>
            </div>
            <div class="card-body">
                <div class="">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <form class="settingForm" wire:submit.prevent="changePassword">
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
                                <button class="btn btn-success btn-sm float-right" type="submit">Change
                                    Password</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 settingOption rounded-top bg-warning mt-5" type="button" data-toggle="collapse"
                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <h5 class="ml-4 mt-1 font-weight-bold">
                        <i class="fas fa-shield-alt mr-2"></i>Privacy</h5>
                    <i class="fas fa-chevron-down mr-3"></i>
                </div>
                <div class="collapse optionContent rounded-bottom" id="collapseExample">
                    <fieldset disabled>
                        <div class="form-group">
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>