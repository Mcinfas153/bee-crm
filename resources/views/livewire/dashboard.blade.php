<div>
    <!-- uPlot -->
    <section class="content px-3">
        <!-- Default box -->
        <div class="custom__box">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <livewire:databox-component title="Today Leads" count="{{ $todayLeads }}" icon="fas fa-magnet"
                            class="info" />
                    </div>
                    <div class="col-md-3 col-12">
                        <livewire:databox-component title="Follow Up" count="{{ $followupLeads }}"
                            icon="fas fa-phone-volume" class="warning" />
                    </div>
                    <div class="col-md-3 col-12">
                        <livewire:databox-component title="Not Interested" count="{{ $notInterestedLeads }}"
                            icon="fas fa-exclamation-triangle" class="danger" />
                    </div>
                    <div class="col-md-3 col-12">
                        <livewire:databox-component title="Closed Deals" count="{{ $closeLeads }}"
                            icon="far fa-handshake" class="success" />
                    </div>
                </div>
            </div>
        </div>

        <div class="custom__box">
            <div class="card-header">
                <h3 class="card-title">Daily Leads</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="google-line-chart" style="width:100%; height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

    </section>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
 
        function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
            ['Month Name', 'Date'],
 
                @php
                foreach($lineChart as $d) {
                    echo "['".$d->date."', ".$d->count."],";
                }
                @endphp
        ]);
 
        var options = {
          title: 'Leads Day Wise',
            vAxis: {
                title: 'Lead Count',
                minValue: 0,
                format: '',
            },
          //curveType: 'function',
          legend: { position: 'bottom' },
        };
 
          var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
 
          chart.draw(data, options);
        }
    </script>
</div>