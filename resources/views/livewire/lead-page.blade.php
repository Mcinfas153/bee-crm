<div>
    <section class="content p-2">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button class="btn btn-secondary btn-sm" onclick="history.back()"><i
                        class="fas fa-chevron-left mr-2"></i>Back</button>
            </div>
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
                                            <button class="btn btn-block btn-primary btn-sm"><i
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
                                    <td>{{ $lead->contact_time }}</td>
                                    <td></td>
                                    <td><span class="badge bg-danger"><i class="fas fa-check-circle"></i> DONE</span>
                                </tr>
                                <tr>
                                    <td>IP Address</td>
                                    <td>{{ $lead->ip_address }}</td>
                                    <td></td>
                                    <td><span class="badge bg-primary"><i class="fas fa-check-circle"></i> DONE</span>
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

    <section class="content p-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-clock mr-2"></i>
                            Lead Timeline
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="timeline">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-{{ Arr::random($classes) }}">{{ date('d M. Y') }}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            @foreach ($lead->timeline->sortByDesc('created_at') as $timeline)

                            <livewire:timeline-component icon="{{ $timeline->timelineType->icon }}"
                                class="{{ Arr::random($classes) }}" time="{{ $timeline->created_at->diffForHumans() }}"
                                message=" {{ $timeline->message }}" creator="{{ $timeline->creator->name }}" />

                            @endforeach
                            <!-- END timeline item -->
                            <div>
                                <i class="fas fa-clock bg-{{ Arr::random($classes) }}"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-pencil-alt mr-2"></i>
                            Remarks
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="callout callout-danger">
                            <h5>I am a danger callout!</h5>

                            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                                entire
                                soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="callout callout-info">
                            <h5>I am an info callout!</h5>

                            <p>Follow the steps to continue to payment.</p>
                        </div>
                        <div class="callout callout-warning">
                            <h5>I am a warning callout!</h5>

                            <p>This is a yellow callout.</p>
                        </div>
                        <div class="callout callout-success">
                            <h5>I am a success callout!</h5>

                            <p>This is a green callout.</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
</div>