
@extends('layouts.main')

    @section('content')

    <div class="container">
        <div class="row ">
    <h2 style="margin:50px 0px 0px 0px;text-align: center;">Age Bar Chart of Users</h2>
    <div id="linechart" style="width: 900px; height: 500px; margin-left: 235px"></div>
    <script type="text/javascript">
        var user_ex_10 = <?php echo $user_ex_10; ?>;
        var user_ex_20 = <?php echo $user_ex_20; ?>;
        var user_ex_30 = <?php echo $user_ex_30; ?>;

        var user_ex_40 = <?php echo $user_ex_40; ?>;
        var user_ex_50 = <?php echo $user_ex_50; ?>;
        var user_ex_60 = <?php echo $user_ex_60; ?>;



        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
             var data = google.visualization.arrayToDataTable([
        //   ['Age', '10:30 yrs', '40:60 yrs'],
        //   ['2018',  user_ex_10, user_ex_40],
        //   ['2019',  user_ex_20, user_ex_50],
        //   ['2020',  user_ex_30, user_ex_60]

          ['Age', '10:20 yrs', '20:30 yrs', '30:40 yrs', '40:50 yrs', '50:60 yrs'],
          ['10 : 60 yrs',  user_ex_10, user_ex_20, user_ex_30, user_ex_40, user_ex_50],





        ]);
            var options = {
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.BarChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }
    </script>
</div>

</div>
@endsection
