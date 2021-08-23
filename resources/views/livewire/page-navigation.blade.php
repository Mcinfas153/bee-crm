<div>
    <section class="content-header p-3">
        <div class="container-fluid">
            <div class="row mb-2 page__navigation">
                <div class="col-sm-6">
                    <h5>{{ $title }}</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>