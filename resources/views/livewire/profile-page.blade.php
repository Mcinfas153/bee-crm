<div>
  <!-- Main content -->
  <section class="content p-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <livewire:profile-info-tab />
          <!-- /.card -->

          <!-- About Me Box -->
          <livewire:profile-about-tab />
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="custom__box">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item col-12 col-md-4 text-center"><a class="nav-link active" href="#addUser"
                    data-toggle="tab"><i class="fas fa-user mr-1"></i> Profile Update</a></li>
                <li class="nav-item col-12 col-md-4 text-center"><a class="nav-link" href="#activity"
                    data-toggle="tab"><i class="fas fa-history mr-1"></i> Activity</a></li>
                <li class="nav-item col-12 col-md-4 text-center"><a class="nav-link" href="#timeline"
                    data-toggle="tab"><i class="fas fa-stream mr-1"></i> Timeline</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <livewire:profile-activity-tab />
                <!-- /.tab-pane -->
                <livewire:profile-timeline-tab />
                <!-- /.tab-pane -->
                <livewire:update-profile-tab />
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>