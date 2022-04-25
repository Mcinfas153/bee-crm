<div>
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">

  <section class="container-fluid">
    <div class="col-md-12">
      <div class="custom__box">
        <div class="card-header">
          <h3 class="text-warning mt-2"> Important Notes :</h3>
          <p class="text-danger ml-4"> <span><img
                src="https://img.icons8.com/emoji/18/000000/warning-emoji.png" /></span>*** mark inputs are required
            inputs.
            Please filled all
            *** marks inputs to save your time.</p>
        </div>
        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#logins-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part"
                  id="logins-part-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Company Contacts</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part"
                  id="information-part-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Basic Informations</span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <form action="/add-company" method="POST">
                @csrf
                <!-- your steps content here -->
                <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                  <div class="form-group">
                    <label for="exampleInputName">Company Name***</label>
                    <input type="text" class="form-control" name="name" value="{{ $name }}">
                    @error('name') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail">Email address***</label>
                      <input type="email" class="form-control" id="exampleInputEmail" name="email" value="{{ $email }}">
                      @error('email') <span class="error error__msg">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputFax">Fax</label>
                      <input type="text" class="form-control" id="exampleInputFax" name="fax" value="{{ $fax }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputPhone">Phone number***</label>
                      <input type="number" class="form-control" id="exampleInputPhone" name="phone"
                        value="{{ $phone }}">
                      @error('phone') <span class="error error__msg">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStreet">Street Address***</label>
                    <input type="text" class="form-control" id="exampleInputStreet" name="street" value="{{ $street }}">
                    @error('street') <span class="error error__msg">{{ $message }}</span> @enderror
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="exampleInputCity">City***</label>
                      <input type="text" class="form-control" id="exampleInputCity" name="city" value="{{ $city }}">
                      @error('city') <span class="error error__msg">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group col-6">
                      <label>Country***</label>
                      <select class="form-control select2" style="width: 100%;" name="country">
                        <option selected="selected" disabled="disabled">Select a country</option>
                        @foreach ($countries as $c)
                        <option value="{{ $c->id }}" {{ ($c->id == $country)?'selected="selected"':'' }}>
                          {{ $c->name }}
                        </option>
                        @endforeach
                      </select>
                      @error('country') <span class="error error__msg">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <button type="button" class="btn btn-warning float-right mt-1 mb-4" onclick="stepper.next()">Next <i
                      class="fas fa-arrow-right ml-1" style="font-size: 14px"></i>
                  </button>
                </div>
                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Employees Count</label>
                      <select class="form-control select2" style="width: 100%;" name="employee_count">
                        <option value="1 - 10" {{ ($employee_count === '1 - 10')?'selected="selected"':'' }}>1 - 10
                          Employees</option>
                        <option value="10 - 50" {{ ($employee_count === '10 - 50')?'selected="selected"':'' }}>10 - 50
                          Employees</option>
                        <option value="50 - 100" {{ ($employee_count === '50 - 100')?'selected="selected"':'' }}>50 -
                          100
                          Employees</option>
                        <option value="100 +" {{ ($employee_count === '100 +')?'selected="selected"':'' }}>100 +
                          Employees</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Industry***</label>
                      <select class="form-control select2" style="width: 100%;" name="category">
                        <option selected="selected" disabled="disabled">Select Inductry</option>
                        @foreach ($categories as $ca)
                        <option value="{{ $ca->id }}" {{ ($ca->id == $category)?'selected="selected"':'' }}>
                          {{ $ca->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Website URL</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">www.</span>
                      </div>
                      <input type="url" class="form-control" name="website" value="{{ $website }}">
                    </div>
                    <div class="stpperButtons mt-4">
                      <button class="btn btn-warning" onclick="stepper.previous()"><i class="fas fa-arrow-left mr-1"
                          style="font-size: 14px"></i> Previous</button>
                      <button type="submit" class="btn btn-warning">Finish <i class="fas fa-arrow-right ml-1"
                          style="font-size: 14px"></i></button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>
  <!-- BS-Stepper -->
  <script src="{{ asset ('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
  <script>
    // BS-Stepper Init
      document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
      })
  </script>
  <script>
     $(document).ready(function(){
        $('#dashboardPage').removeClass('item-active');
        $('#companyPage').addClass('item-active');
    });
  </script>
</div>