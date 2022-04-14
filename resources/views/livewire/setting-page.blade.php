<div>
    <section class="content px-3">
        <!-- Default box -->
        <div class="custom__box">
            @can('adminView', App\Models\User::class)
            @endcan
            <div class="card-body">
                @can('adminView', App\Models\User::class)
                <div class="col-12 settingOption bg-warning" type="button" data-toggle="collapse"
                    data-target="#privacySettings" aria-expanded="false" aria-controls="privacySettings">
                    <h6 class="ml-4 mt-1 font-weight-semibold">
                        <i class="fas fa-user-secret mr-2"></i>PRIVACY
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
                <div class="mt-2">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="col-12 settingOption bg-warning" type="button" data-toggle="collapse"
                    data-target="#passwordSettings" aria-expanded="false" aria-controls="passwordSettings">
                        <h6 class="ml-4 mt-1 font-weight-semibold">
                            <i class="fas fa-lock mr-1"></i> PASSWORD SETTINGS
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
                <div class="mt-2 col-12 settingOption bg-warning" type="button" data-toggle="collapse"
                    data-target="#activeSessions" aria-expanded="false" aria-controls="activeSessions">
                    <h6 class="ml-4 mt-1 font-weight-semibold">
                        <i class="fas fa-laptop mr-2"></i>ACTIVE SESSIONS
                    </h6>
                    <i class="fas fa-chevron-down mr-3"></i>
                </div>
                <div class="collapse optionContent" id="activeSessions">
                    <fieldset>
                        <p class="mt-1">View and manage all of your active sessions.</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="fas fa-laptop mr-1"></i>
                                      Current Session
                                    </h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <blockquote class="session">
                                      <div class="col-xl-8">
                                        <h5>Device Name</h5>
                                        <p>1 hour ago
                                        <br>
                                        Windows | Chrome</p>
                                        <small>Nugegoda, Basnahira Palata, Sri Lanka</small>
                                        <br>
                                        <small>123.231.107.113</small>
                                      </div>
                                      <div class="col-xl-4">
                                        <a class="btn btn-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                                      </div>
                                    </blockquote>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                      <i class="fas fa-laptop mr-1"></i>
                                      Other Session
                                    </h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <blockquote class="session quote-secondary">
                                      <div class="col-xl-8">
                                        <h5>Device Name</h5>
                                        <p>1 hour ago
                                        <br>
                                        Windows | Chrome</p>
                                        <small>Nugegoda, Basnahira Palata, Sri Lanka</small>
                                        <br>
                                        <small>123.231.107.113</small>
                                      </div>
                                      <div class="col-xl-4">
                                        <a class="btn btn-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                                      </div>
                                    </blockquote>
                                    <blockquote class="session quote-secondary">
                                        <div class="col-xl-8">
                                          <h5>Device Name</h5>
                                          <p>1 hour ago
                                          <br>
                                          Windows | Chrome</p>
                                          <small>Nugegoda, Basnahira Palata, Sri Lanka</small>
                                          <br>
                                          <small>123.231.107.113</small>
                                        </div>
                                        <div class="col-xl-4">
                                          <a class="btn btn-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                                        </div>
                                    </blockquote>
                                    <blockquote class="session quote-secondary">
                                        <div class="col-xl-8">
                                          <h5>Device Name</h5>
                                          <p>1 hour ago
                                          <br>
                                          Windows | Chrome</p>
                                          <small>Nugegoda, Basnahira Palata, Sri Lanka</small>
                                          <br>
                                          <small>123.231.107.113</small>
                                        </div>
                                        <div class="col-xl-4">
                                          <a class="btn btn-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                                        </div>
                                    </blockquote>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>

    <script>
        $(document).ready(function(){
           $('#dashboardPage').removeClass('item-active');
           $('#settingsPage').addClass('item-active');
       });
     </script>
</div>