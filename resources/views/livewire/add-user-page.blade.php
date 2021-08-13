<div>
    <div>
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body row">
                                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                                      <div class="">
                                          <div class="addUserLogo rounded-circle mx-auto mb-3">
                                            <img src="https://img.icons8.com/ios-filled/70/000000/bee.png" class="mt-5"/>
                                          </div>
                                        <h2>Bee <strong>CRM</strong></h2>
                                        <p class="lead mb-5">311 C/24, Poruthota, Kochikade<br>
                                          Phone: +94 76 487 8633
                                        </p>
                                      </div>
                                    </div>
                                    <div class="col-7">
                                      <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" id="inputName" class="form-control" name="user" />
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail">E-Mail</label>
                                        <input type="email" id="inputEmail" class="form-control" name="email" />
                                      </div>
                                        <div class="form-group">
                                            <label>Usertype</label>
                                            <select class="form-control select2" style="width: 100%;" name="usertype">
                                                <option selected="selected" disabled="disabled">Select a User Type</option>
                                                <option>Super Admin</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                </select>
                                        </div>
                                      <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" id="inputPassword" class="form-control" name="password" />
                                      </div>
                                      <div class="form-group">
                                        <label for="retypePassword">Retype Password</label>
                                        <input type="password" id="retypePassword" class="form-control" name="retypepassword" />
                                      </div>
                                      <div class="form-group row">
                                        <div class="col-sm-10">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox" class="mr-1"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <button class="btn btn-success"><i class="fas fa-user-plus mr-1"></i> Add User</button>
                                      </div>
                                    </div>
                                  </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
</div>