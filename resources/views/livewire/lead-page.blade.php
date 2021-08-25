<div>
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <section class="content px-3">
        <!-- Default box -->
        <div class="custom__box">
            <div class="card-header">
                <button class="btn btn-secondary btn-sm" onclick="history.back()"><i
                        class="fas fa-chevron-left mr-2"></i>Back</button>
            </div>
            <!-- /.card-header -->
            <div class="custom__box p-3">
                <div class="card-body p-0">
                    <table class="table table-striped table-bordered" id="leadDetails">
                        <thead>
                            <tr class="bg-{{ $lead->leadStatus->class_color }}">
                                <th style="width: 20%">Current Status</th>
                                <th style="width: 40%">{{ $lead->leadStatus->name }}</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $lead->name }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $lead->email }} </td>
                                <td>
                                    <a href="mailto:{{ $lead->email }}" target="_BLANK"
                                        wire:click="sentEmail({{ $lead->id }})">
                                        <button class="btn btn-block btn-primary btn-sm"><i
                                                class="fas fa-envelope mr-2"></i>MAIL
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>{{ $lead->mobile }}</td>
                                <td>
                                    <a href="tel:{{ $lead->mobile }}" target="_BLANK"
                                        wire:click="makeCall({{ $lead->id }})">
                                        <button class="btn btn-block btn-success btn-sm"><i
                                                class="fas fa-mobile-alt mr-2"></i>CALL
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Inquiry</td>
                                <td>{{ $lead->inquiry }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Project</td>
                                <td>{{ $lead->project }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $lead->country }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Contact Time</td>
                                <td>{{ $lead->contact_time }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>IP Address</td>
                                <td>{{ $lead->ip_address }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->
    </section>

    <section class="content px-3">
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
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <form method="post" action="{{ url('add-remark') }}">
                            @csrf
                            <input type="hidden" value="{{ $leadId }}" name="lead_id" />
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="remark" required></textarea>
                                @error('remark') <span class="error error__msg">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit"><i
                                        class="fas fa-edit mr-2"></i>Add</button>
                            </div>
                        </form>
                        <div class="remark__panel mt-3" id="remark__panel">
                            @foreach ($remarks as $r)
                            <livewire:remark-component creator="{{ $r->created_by }}" message="{{ $r->message }}" />
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/pages/leadPage.js') }}"></script>
</div>