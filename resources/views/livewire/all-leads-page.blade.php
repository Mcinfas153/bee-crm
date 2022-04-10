<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-select/css/select.bootstrap4.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <section class="content px-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="custom__box">
                        <!-- /.card-header -->
                        <div class="card-body" id="example2_wrapper">
                            <div class="offset-md-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Date range:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right mr-2" id="custom_dates">
                                        <button class="btn btn-success btn-sm btn-flat"
                                            id="btnFiterSubmitSearch">Filter</button>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <table class="table table-bordered yajra-datatable" id="leads__table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Project</th>
                                        <th>Assign To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
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
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/table-to-list/tableToList.js') }}"></script>

    <!-- InputMask -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script type="text/javascript">
        let getLeadsRoute = "{{ route('leads.getLeads') }}";
        $(function() {
            getList('#leads__table', '#parent');
        });
        
        $(function () {   
                                 
            var table = $('#leads__table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: getLeadsRoute,
                type: 'GET',
                data: function (d) {
                    d.start_date = makeProperDate()[0];
                    d.end_date = makeProperDate()[1];
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'mobile', name: 'mobile'},
                {data: 'project', name: 'project'},
                {data: 'assign_user', name: 'assign_user'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
            });        
        });

      $('#custom_dates').daterangepicker({
            locale: {
                format: 'YYYY/MM/DD'
            },
            startDate: new Date(new Date().setDate(new Date().getDate() - 30)),
            endDate: new Date()
        });

        $('#btnFiterSubmitSearch').click(function(){
            let dates= $('#custom_dates').val();
            dates = dates.split("-");
            $('#leads__table').DataTable().draw(true);
        });

        function makeProperDate()
        {
            let dates= $('#custom_dates').val();
            dates = dates.split("-");
            return dates;
        }
      
    </script>
    <script>
        $(document).ready(function(){
           $('#dashboardPage').removeClass('item-active');
           $('#leadsPage').addClass('item-active');
           $('#allleadPage').addClass('item-active');
       });
     </script>
</div>