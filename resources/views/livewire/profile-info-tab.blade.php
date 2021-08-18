<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img src="{{ Auth::user()->profile_url?asset('storage/'.Auth::user()->profile_url.''):generateAvatar(Auth::user()->name) }}"
                width="50px" class="rounded-circle" />
        </div>

        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

        <p class="text-muted text-center">{{ Auth::user()->userType->name }}</p>

        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
    </div>
    <!-- /.card-body -->
</div>