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
                                <div class="alert alert-{{ session('alertType') }} alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ session('title') }}!</strong> {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <form wire:submit.prevent="addLead">
                                    <div wire:loading wire:target="addLead">
                                        <div class="loading" style="display: block">Processing...</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" id="inputName" class="form-control form-control-sm"
                                            wire:model.defer="name" />
                                        @error('name') <span class="error error__msg">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" id="inputEmail" class="form-control form-control-sm"
                                            wire:model.defer="email" />
                                        @error('email') <span class="error error__msg">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMobile">Mobile</label>
                                        <input type="text" id="inputMobile" class="form-control form-control-sm"
                                            wire:model.defer="mobile" />
                                        @error('mobile') <span class="error error__msg">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMobile">Inquiry</label>
                                        <textarea id="inputInquiry" class="form-control form-control-sm" rows="5"
                                            wire:model.defer="inquiry">
                                        </textarea>
                                        @error('inquiry') <span class="error error__msg">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputProject">Project</label>
                                        <input type="text" id="inputProject" class="form-control form-control-sm"
                                            wire:model.defer="project" />
                                        @error('project') <span class="error error__msg">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCountry">Country</label>
                                        <input type="text" id="inputCountry" class="form-control form-control-sm"
                                            wire:model.defer="country" />
                                        @error('country') <span class="error error__msg">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputLeadSource">Lead Source</label>
                                        <input type="text" id="inputLeadSource" class="form-control form-control-sm"
                                            wire:model.defer="lead_source" />
                                        @error('lead_source') <span class="error error__msg">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-warning float-right"><i class="fas fa-magnet mr-1"></i>
                                            Add Lead</button>
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
           $('#leadsPage').addClass('item-active');
           $('#addleadPage').addClass('item-active');
       });
     </script>
</div>