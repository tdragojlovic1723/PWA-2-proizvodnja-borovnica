@extends('layouts.admin.default')

@section('content')
<div class="row">
  <div class="col-xl-6">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-chart-pie me-1"></i>
        Udeo različitih sorti u ukupnoj proizvodnji na plantažama u Srbiji
      </div>

      <div class="d-flex justify-content-center">
        <div id="piechart" class="p-2"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-6">
    <div class="card mb-4">

      <div class="card-header">
        <i class="fas fa-chart-column me-1"></i>
        Broj rezervacija po mesecu
      </div>

      <div class="d-flex justify-content-center">
        <div id="columnchart" class="p-2"></div>
      </div>

    </div>
  </div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Sorta', 'Broj berbi'],
    @foreach ($pie_chart_podaci as $p)
      ['{{ $p->kind }}', {{ $p->br }}],
    @endforeach
  ]);

  var options = {
    width: 600,
    height: 300,

    titleTextStyle: {
        fontSize: 24,
        bold: true,
    },
    legend: {
        textStyle: {
            fontSize: 16,
        }
    },
    chartArea: {
      top: 30,
    },
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
</script>

<script type="text/javascript">
google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  const chartData = @json($bar_chart_podaci);

  console.log(chartData);

  var data = google.visualization.arrayToDataTable([
    ['Mesec', 'Broj rezervacija'],
    @foreach ($bar_chart_podaci as $b)
      ['{{ $b->month }}', {{ $b->br }}],
    @endforeach
  ]);

  var options = {
    height: 300,
    hAxis: {
      title: 'Mesec',
      slantedText: true,
      slantedTextAngle: 60
    },
    vAxis: {
      title: 'Broj rezervacije',
      minValue: 0
    },
    legend: { position: 'none' },
    chartArea: {
      top: 20,
    },
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
  chart.draw(data, options);
}
</script>
@endsection