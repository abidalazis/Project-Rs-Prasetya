@extends('laporan.layouts.main')
@push('chart')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- aga --}}
<script type="text/javascript">
// unit
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php echo $dataChart?>
    ]);

    var options = {
      title: 'Grafik Laporan per Unit'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
// jenis
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php echo $jenisChart?>
    ]);

    var options = {
      title: 'Grafik Laporan per Unit'
    };

    var chart = new google.visualization.PieChart(document.getElementById('jenis'));

    chart.draw(data, options);
  }
</script>
@endpush
@section('content')
<div class="container-fluid px-5">
    <h1 class="mt-4">Laporan Service</h1>
    <ol class="breadcrumb mb-5">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Service</li>
    </ol>
  
    <div class="row">
      <div class="col-6">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
      </div>  
      <div class="col-6">
        <div id="jenis" style="width: 900px; height: 500px;"></div>
      </div>  
    </div>
   
</div>
@endsection

