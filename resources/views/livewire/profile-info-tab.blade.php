<div class="custom__box card-warning card-outline mb-2">
    <div class="card-body box-profile">
        <div class="text-center">
            <img src="{{ Auth::user()->profile_url?asset('storage/'.Auth::user()->profile_url.''):generateAvatar(Auth::user()->name) }}"
                class="rounded-circle" />
        </div>

        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

        <p class="text-muted text-center">{{ Auth::user()->userType->name }}</p>
    </div>
    <!-- /.card-body -->
</div>