/*=========================================================================================
    File Name: line.js
    Description: Chartjs simple line chart
    ----------------------------------------------------------------------------------------
    Item Name: Robust - Responsive Admin Theme
    Version: 1.2
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Line chart
// ------------------------------
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#line-chart");

 $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                   console.log(data);
                     var date = [];
                    var total = [];

                    for (var i in data) {
                        date.push(data[i].date);
                        total.push(data[i].total);
                    }
    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Ammount in KSh'
                }
            }]
        },
        title: {
            display: true,
            text: 'Annual Chart display '
        }
    };

    // Chart Data
    var chartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
            label: "Sales",
           
            borderDash: [5, 5],
            borderColor: "#673AB7",
            pointBorderColor: "#673AB7",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }, {
            label: "Expences",
            data: [28, 48, 40, 19, 86, 27, 50,28, 48, 40, 19, 86],
            fill: false,
            borderDash: [5, 5],
            borderColor: "#00BCD4",
            pointBorderColor: "#00BCD4",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }, {
            label: "Profit",
            data: [45, 25, 16, 36, 67, 18, 26,28, 18, 50, 39, 16],
            lineTension: 0,
            fill: false,
            borderColor: "#FF5722",
            pointBorderColor: "#FF5722",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }]
    };

    var config = {
        type: 'line',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var lineChart = new Chart(ctx, config);
});