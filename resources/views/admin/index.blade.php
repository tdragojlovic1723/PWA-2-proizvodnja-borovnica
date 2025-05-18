@extends('layouts.admin.default')

@section('content')

<h1 class="mt-1 mb-4">Dashboard</h1>
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


<h3 class="mt-4 mb-4">CRUD operacije</h3>
<div class="row">
  <div class="col-xl-3 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Plantaže</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="{{ route('plantaza.list') }}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Sorte</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="{{ route('sorta.list') }}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Berbe</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="{{ route('berba.list') }}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
  </div>

  <!-- TODO: da li je potreban CRUD za rezervacije? zar nema smisla da ima samo read i delete? (tj. cancel) -->
  <div class="col-xl-3 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Rezervacije</div>
        <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="{{ route('reservation.list') }}">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
  </div>
</div>

<h3 class="mt-4 mb-4">Označavanje istaknutog</h3>
<div class="row">

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