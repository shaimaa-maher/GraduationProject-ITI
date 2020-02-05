@extends('layouts.app')

@section('content')


<br />
<div class="container ">
    <div class="m-5">
        <div class="m-5">
            <h3 class="panel-title">Charts for our website</h3>
        </div>
        <div class="row">
            <div id="gender_chart" class="col-lg-6 col-md-12 chartbox" >

            </div>
            <div id="country_chart" class="col-lg-6 col-md-12 chartbox">

            </div>
        </div>
    </div>
    

</div>
<script type="text/javascript">
    var analytics = <?php echo $gender; ?>

    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title: 'Percentage of Male and Female Users',
            is3D:true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('gender_chart'));
        chart.draw(data, options);
    }
/////// COUNTRY ////////
    var country = <?php echo $country; ?>

    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(drawCountryChart);

    function drawCountryChart() {
        var data = google.visualization.arrayToDataTable(country);
        var options = {
            title: 'Percentage of Users countries',
            pieHole: 0.4,
            
        };
        var chart = new google.visualization.PieChart(document.getElementById('country_chart'));
        chart.draw(data, options);
    }
</script>
@endsection