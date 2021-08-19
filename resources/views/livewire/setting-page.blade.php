<div>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h4 class="text-warning">Warning :</h4> <p class="cardHeaderCaption text-danger ml-4"><img src="https://img.icons8.com/emoji/18/000000/warning-emoji.png"/> " This may affect your Profile Page "</p>         
            </div>
            <div class="card-body">
                <div class="col-12 settingOption rounded-top" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                   <h5 class="ml-4 mt-1"><img src="https://img.icons8.com/ios-glyphs/30/000000/shield.png" class="mr-1"/>Privacy</h5>
                   <i class="fas fa-chevron-down mr-3"></i>
                </div>
                <div class="collapse optionContent rounded-bottom" id="collapseExample">
                    <form class="settingForm">
                        <div class="form-group">
                            <label>Change New Password :</label>
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <input type="password" id="newPassword" class="form-control" placeholder="Change Your Password">
                                <div class="input-group-prepend">
                                   <div class="input-group-text rounded-right"><i class="fas fa-eye"></i></div>
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Confirm New Password :</label>
                            <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Your Password">
                                <div class="input-group-prepend">
                                   <div class="input-group-text rounded-right"><i class="fas fa-eye"></i></div>
                                </div>
                            </div>
                          </div>
                        <form>
                            <fieldset disabled>
                              <div class="form-group">
                                <label>API Code :</label>
                                <div class="input-group mb-2 mr-sm-2 col-md-10 text-center">
                                    <input type="text" id="apiCode" class="form-control" value="{{ $user->auth_code }}">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text rounded-right"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                              </div>
                        </form>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
</div>