<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">

                                @can('create', App\models\User::class)
                                <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                                    <i class="fa fa-plus mr-2"></i>
                                    Add User
                                </button>
                                @endcan
                                <table id="users" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        @can('view', $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td></td>
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
    <!-- Add user Modal start-->
    <div class="modal" tabindex="-1" id="addUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal__success">
                    <h5 class="modal-title"><i class="fas fa-user mr-2"></i>Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" id="user" placeholder="Full Name" class="form-control mt-2 mb-2" name="user">
                        <input type="text" id="user" placeholder="Email Address" class="form-control mb-2" name="email">
                        <select id="user--type" name="userType" class="form-control mb-2">
                            <option disabled="disabled" selected="selected">Select user type</option>
                            @foreach ($utypes as $utype)
                            @can('view', $utype)
                            <option value="{{ $utype->id }}">{{ $utype->name }}</option>
                            @endcan
                            @endforeach
                        </select>
                        <input type="password" id="password" placeholder="Password" class="form-control mb-2"
                            name="password">
                        <input type="password" id="retypePassword" placeholder="Retype Password"
                            class="form-control mb-2" name="repassword">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-user mr-2"></i>Add
                        user</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add user Modal end-->
</div>
<script>
    $(function () {
        $("#users").DataTable({
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