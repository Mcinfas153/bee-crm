<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <section class="content px-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="custom__box">
                        <!-- /.card-header -->
                        <div class="card-body" id="example2_wrapper">
                            <table id="leads" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Mobile</th>
                                        <th class="text-center">Campaign</th>
                                        <th class="text-center">Lead Status</th>
                                        <th class="text-center">Action</th>
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
                                        <td class="text-center">
                                            <a title="{{ $lead->email }}"
                                                href="mailto:{{ $lead->email }}">{{ Str::limit($lead->email,20) }}</a>
                                        </td>
                                        <td class="text-center">
                                            <a title="{{ $lead->mobile }}"
                                                href="tel:{{ $lead->mobile }}">{{ Str::limit($lead->mobile,15) }}</a>
                                        </td>
                                        <td class="text-center">{{ $lead->project }}</td>
                                        <td class="text-center">
                                            <span
                                                class="cusom__box p-1 px-3 bg-{{ $lead->leadStatus->class_color }}">{{ $lead->leadStatus->name }}</span>
                                        </td>
                                        <td class="leadstable__button">
                                            <a href="tel:{{ $lead->mobile }}" target="_BLANK"
                                                wire:click="makeCall({{ $lead->id }})">
                                                <button class="btn btn-success btn-block btn-flat mb-1">
                                                    <i class="fas fa-phone-alt mr-2"></i>
                                                    Call</button>
                                            </a>
                                            <a href="mailto:{{ $lead->email }}" target="_BLANK"
                                                wire:click="sentEmail({{ $lead->id }})">
                                                <button class="btn btn-primary btn-block btn-flat mb-1">
                                                    <i class="fas fa-envelope mr-2"></i>
                                                    Email</button>
                                            </a>
                                            <a href="/lead/{{ $lead->id }}">
                                                <button class="btn btn-warning btn-flat btn-block">
                                                    <i class="fas fa-info-circle mr-2"></i> Details
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
          "buttons": ["copy", "csv", "excel", "pdf", "print"]
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