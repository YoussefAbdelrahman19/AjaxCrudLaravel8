@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row ">
    <div class=" mx-auto " style="width:80%;padding:20px">
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
  <script type="text/javascript">
   var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Users'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
 </head>
 <body>
  <br />
  <div class="container">

   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title text-primary my-3">Percentage of Male and Female User</h3>
    </div>
    <div class="panel-body" align="center">
     <div id="pie_chart" style="width:900px; height:450px;" class="mx-auto">

     </div>
    </div>
   </div>

  </div>
  @endsection
