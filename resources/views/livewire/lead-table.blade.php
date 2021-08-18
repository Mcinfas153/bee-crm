<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="leads" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Country</th>
                                            <th>Contact Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leads as $lead)
                                        @can('view', $lead)
                                        <tr>
                                            <td>{{ $lead->id }}</td>
                                            <td>
                                                <span title="{{ $lead->name }}">{{ Str::limit($lead->name,10) }}</span>
                                            </td>
                                            <td>
                                                <a title="{{ $lead->email }}"
                                                    href="mailto:{{ $lead->email }}">{{ Str::limit($lead->email,20) }}</a>
                                            </td>
                                            <td>
                                                <a title="{{ $lead->mobile }}"
                                                    href="tel:{{ $lead->mobile }}">{{ Str::limit($lead->mobile,15) }}</a>
                                            </td>
                                            <td>{{ $lead->country }}</td>
                                            <td>{{ $lead->contact_time }}</td>
                                            <td class="leadstable__button">
                                                <a href="tel:{{ $lead->mobile }}">
                                                    <button class="btn btn-success btn-block mb-1">
                                                        <i class="fas fa-phone-alt mr-1"></i>
                                                        Call</button>
                                                </a>
                                                <a href="mailto:{{ $lead->email }}">
                                                    <button class="btn btn-primary btn-block mb-1">
                                                        <i class="fas fa-envelope mr-1"></i>
                                                        Email</button>
                                                </a>
                                                <a href="#">
                                                    <button class="btn btn-warning btn-block" data-toggle="modal"
                                                        data-target="#exampleModalCenter">
                                                        <i class="fas fa-info-circle mr-1"></i> Status
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endcan
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        $(function () {
            $("#leads").DataTable({
          "responsive": true,
           "lengthChange": false,
            "autoWidth": false,
            select: true,
            "order": [[ 0, "desc" ]],
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
         });
    </script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
</div>