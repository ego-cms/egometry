<html>
<head>
    <title>Choose An App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            /*data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);*/

            // Set chart options
            var options = {'title':'How much and what type of events app has',
                'width':500,
                'height':400};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <style>
        .left-border {
            border-left: thick double #5A5758;
        }
    </style>
</head>
<body>
<h1 class="text-center">Welcome to awful dashboard!</h1>
<div class="col-md-3">
    <h3>Choose an app</h3>
    <ul>
        <?php foreach ($apps as $app_name): ?>
            <li><a href="/get_stats_for/<?= $app_name ?>"><?= $app_name ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="col-md-5 left-border">
    <h3>See stats</h3>
    <div id="chart_div"></div>
</div>
</body>
</html>



