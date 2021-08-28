<div>
    <section class="content pl-3 pr-3">
        <div class="custom__box">
            <div class="card-body">
                <div class="row">
                    @foreach($plans as $plan)
                    <div class="col-lg-4 col-12 mx-auto">
                        <!-- small box -->
                        <div class="custom__box {{ Arr::random($class) }} p-5">
                            <div class="inner">
                                <h5>{{$plan->title}}</h5>
                                <h6>{{(int)$plan->price }} AED / Month</h6>
                                <hr>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Up to
                                    {{ $plan->accounts_count }} accounts
                                </p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Leads Managment</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Team Managment</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Lead Follow Up</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Lead Timeline</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Dashboard</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>14 days trial</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Api Intergration</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>To Do List</p>
                                <p class="mb-1"><i class="fas fa-check fa-xs text-warning mr-2"></i>Event Calender</p>
                                <p class="mb-3"><i class="fas fa-check fa-xs text-warning mr-2"></i>Assign Leads</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('payments', ['plan' => $plan->identifier]) }}"
                                class="small-box-footer mr-2">START YOUR FREE TRIAL <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </section>
</div>