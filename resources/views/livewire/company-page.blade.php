<div>
    <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">

<section class="container-fluid">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Write your Company Details</h3>
            </div>
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <!-- your steps here -->
                  <div class="step" data-target="#logins-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">Company Contacts</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#information-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">Basic Informations</span>
                    </button>
                  </div>
                </div>
                <div class="bs-stepper-content">
                  <!-- your steps content here -->
                  <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                    <div class="form-group">
                        <label for="exampleInputName">Company Name</label>
                        <input type="text" class="form-control" id="exampleInputName">
                    </div>                   
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputFax">Fax</label>
                            <input type="text" class="form-control" id="exampleInputFax">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputPhone">Phone number</label>
                            <input type="number" class="form-control" id="exampleInputPhone">
                          </div>
                    </div>                    
                    <div class="form-group">
                        <label for="exampleInputStreet">Street Address</label>
                        <input type="text" class="form-control" id="exampleInputStreet">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputCity">City</label>
                            <input type="text" class="form-control" id="exampleInputCity">
                        </div>
                        <div class="form-group col-6">
                            <label>Country</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                            </select>
                          </div>
                    </div>    
                    <button class="btn btn-primary float-right mt-1 mb-4" onclick="stepper.next()">Next <i class="fas fa-arrow-right ml-1" style="font-size: 14px"></i></button>
                  </div>
                  <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Employers in Company</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">1 - 10 Employers</option>
                              <option>10 - 100 Employers</option>
                              <option>100 - 1000 Employers</option>
                              <option>1000 - 10,000 Employers</option>
                              <option>10,000 - 100,000 Employers</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Category of Company</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected" disabled="disabled">None</option>
                              <option>Real Estate</option>
                              <option>Trading</option>
                              <option>Matrimony</option>
                              <option>IT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Website URL</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">www.</span>
                                  </div>
                                  <input type="url" class="form-control">
                                </div>
                    <div class="stpperButtons mt-4">
                        <button class="btn btn-primary" onclick="stepper.previous()"><i class="fas fa-arrow-left mr-1" style="font-size: 14px"></i> Previous</button>
                        <button type="submit" class="btn btn-primary">Finish <i class="fas fa-arrow-right ml-1" style="font-size: 14px"></i></button>
                    </div>
                  </div>
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
</div>