<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <section class="content pl-3 pr-3">
        <div class="custom__box">
            <div class="card-body">
                <table class="table table-striped" id="invoice__table">
                    <thead>
                        <th>Number</th>
                        <th class="text-center">Date</th>
                        <th class="text-right">Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->number }}</td>
                            <td class="text-center">{{ $invoice->created }}</td>
                            <td class="text-right">{{ number_format(substr($invoice->amount_paid, 0, -2), 2) }}
                                {{ Str::upper($invoice->currency) }}
                            </td>
                            <td class="text-center"><span
                                    class="custom__box px-2 {{ $invoice->status == 'paid'? 'bg-success':'bg-danger' }}">{{ Str::ucfirst($invoice->status) }}</span>
                            </td>
                            <td class="text-center"><a class="btn btn-sm btn-primary btn-flat"
                                    href="https://pay.stripe.com/invoice/acct_1JQnpKCWPCrcSE80/invst_K5Mzz26eJ3XunyVD3WF0oPV9Rt2XY8C/pdf">
                                    <i class="fas fa-download mr-2"></i>
                                    Download</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $('#invoice__table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    </script>
</div>