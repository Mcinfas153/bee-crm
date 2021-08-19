<div>
    <section class="content p-2">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="bg-{{ $lead->leadStatus->class_color }}">
                                    <th style="width: 20%">Current Status</th>
                                    <th style="width: 60%">{{ $lead->leadStatus->name }}</th>
                                    <th style="width: 15%">#</th>
                                    <th style="width: 5%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $lead->name }}</td>
                                    <td></td>
                                    <td><span class="badge bg-danger"><i class="fas fa-check-circle"></i> DONE</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $lead->email }} </td>
                                    <td>
                                        <a href="mailto:{{ $lead->email }}">
                                            <button class="btn btn-block btn-secondary btn-sm"><i
                                                    class="fas fa-envelope mr-2"></i>MAIL
                                            </button>
                                        </a>
                                    </td>
                                    <td><span class="badge bg-secondary"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>{{ $lead->mobile }}</td>
                                    <td>
                                        <a href="tel:{{ $lead->mobile }}">
                                            <button class="btn btn-block btn-success btn-sm"><i
                                                    class="fas fa-mobile-alt mr-2"></i>CALL
                                            </button>
                                        </a>
                                    </td>
                                    <td><span class="badge bg-primary"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                                <tr>
                                    <td>Inquiry</td>
                                    <td>{{ $lead->inquiry }}</td>
                                    <td></td>
                                    <td><span class="badge bg-info"><i class="fas fa-check-circle"></i> DONE</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Project</td>
                                    <td>{{ $lead->project }}</td>
                                    <td></td>
                                    <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>{{ $lead->country }}</td>
                                    <td></td>
                                    <td><span class="badge bg-warning"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                                <tr>
                                    <td>Contact Time</td>
                                    <td></td>
                                    <td>{{ $lead->contact_time }}</td>
                                    <td><span class="badge bg-danger"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
</div>