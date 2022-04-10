<div class="custom__box card-success">
    <div class="card-header">
        <h3 class="card-title">About Me</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
        <p class="text-muted">
            {{ Auth::user()->email }}
        </p>
    </div>
    <!-- /.card-body -->
</div>