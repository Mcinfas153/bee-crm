<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-select/css/select.bootstrap4.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
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
                                        <th class="text-center">Mobile</th>
                                        <th class="text-center">Campaign</th>
                                        <th class="text-center">Lead Source</th>
                                        <th class="text-center">Lead Status</th>
                                        @can('adminView', App\Models\User::class)
                                        <th class="text-center">Assign to</th>
                                        @endcan
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $lead)
                                    @can('view', $lead)
                                    <tr class="table__row">
                                        <td>
                                            <span>{{ $lead->id }}</span>
                                            @can('adminView', App\Models\User::class)
                                            <input type="checkbox" name="lead_id" class="ml-2"
                                                value="{{ $lead->id }}" />
                                            @endcan
                                        </td>
                                        <td>
                                            <span title="{{ $lead->name }}">{{ Str::limit($lead->name,10) }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a title="{{ $lead->mobile }}" href="tel:{{ $lead->mobile }}"
                                                wire:click="makeCall({{ $lead->id }})">{{ Str::limit($lead->mobile,15) }}</a>
                                        </td>
                                        <td class="text-center">{{ $lead->project }}</td>
                                        <td class="text-center">{{ $lead->lead_source }}</td>
                                        <td class="text-center">
                                            <span
                                                class="cusom__box p-1 px-3 bg-{{ $lead->leadStatus->class_color }}">{{ Str::ucfirst(Str::replace('_', ' ', $lead->leadStatus->name)) }}</span>

                                            @if (checkHotLead($lead))
                                            <div class="cusom__box bg-danger mt-3 p-1 text-center"><span
                                                    class="fa fa-fire mr-1"></span>
                                                Hot Lead
                                            </div>
                                            @endif

                                        </td>
                                        @can('adminView', App\Models\User::class)
                                        <td class="text-center">
                                            {{ $lead->assign_to ? $lead->assignUser->name : '-' }}
                                        </td>
                                        @endcan
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

    <!-- User modal start -->
    @can('adminView', App\Models\User::class)
    <div class="modal fade" id="user__modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Users</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        @csrf
                        <label for="user" class="col-sm-3 col-form-label">Select a user</label>
                        <div class="col-sm-9">
                            <select name="user" id="user" class="form-control" required>
                                <option disabled="disabled" selected="selected">Select a user
                                </option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="assignLead()">Assign lead</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endcan
    <!-- User modal end -->
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
    <script src="{{ asset('assets/plugins/datatables-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/pages/leadTable.js') }}"></script>
</div>