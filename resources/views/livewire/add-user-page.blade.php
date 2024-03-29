<div>
  <section class="content px-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="custom__box">
            <!-- /.card-header -->
            <div class="card-body row">
              <div class="col-md-5 text-center d-flex align-items-center justify-content-center">
                <div class="">
                  <div class="addUserLogo rounded-circle mx-auto mb-3">
                      <img src="{{ asset('assets/dist/img/logos/transperant-logo.png') }}"
                          class="mt-4 rounded-circle" width="100" />
                  </div>
                  <h2>Bee <strong>CRM</strong></h2>
                  <p class="lead mb-5">311/A , Wellawatha Road,<br>
                      Colombo 2, Sri Lanka.
                  </p>
                  <img src="https://img.icons8.com/ios/100/000000/trial-version.png" />
              </div>
              </div>
              <div class="col-md-7">
                @if (session()->has('message'))
                <div class="alert alert-{{ session('alertType') }} alert-dismissible fade show" role="alert">
                  <strong>{{ session('title') }}!</strong> {{ session('message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <form wire:submit.prevent="addUser">
                  <div wire:loading wire:target="addUser">
                    <div class="loading" style="display: block">Processing...</div>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" class="form-control form-control-sm" wire:model.lazy="name" />
                    @error('name') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">E-Mail</label>
                    <input type="email" id="inputEmail" class="form-control form-control-sm" wire:model.lazy="email" />
                    @error('email') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                    <label>User type</label>
                    <select class="form-control select2 form-control-sm" style="width: 100%;" wire:model.lazy="utype">
                      <option disabled="disabled">Select a user type</option>
                      @foreach ($utypes as $utype)
                      @can('view', $utype)
                      <option wire:key="{{ $utype->id }}" value="{{ $utype->id }}">{{ $utype->name }}</option>
                      @endcan
                      @endforeach
                    </select>
                    @error('utype') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control form-control-sm"
                      wire:model.lazy="password" />
                    @error('password') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                    <label for="retypePassword">Retype Password</label>
                    <input type="password" id="retypePassword" class="form-control form-control-sm"
                      wire:model.lazy="repassword" />
                    @error('repassword') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="mr-1" wire:model.lazy="agreed"> I agree to the <a href="#">terms
                            and conditions</a>
                        </label>
                      </div>
                      @error('agreed') <span class="error error__msg">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-warning float-right"><i class="fas fa-user-plus mr-1"></i> Add User</button>
                  </div>
                </form>
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
  <script>
    $(document).ready(function(){
       $('#dashboardPage').removeClass('item-active');
       $('#usersPage').addClass('item-active');
       $('#addusersPage').addClass('item-active');
   });
 </script>
</div>