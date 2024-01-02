@extends('dashboard.index')

@section('content')
<div>
    <h2>Dashboard Content</h2>
    <div>
        <!-- Bar Chart Container -->
        <canvas id="barChart" width="400" height="200"></canvas>

        <!-- Line Chart Container -->
        <canvas id="lineChart" width="400" height="200"></canvas>

        <!-- Pie Chart Container -->
        <canvas id="pieChart" width="400" height="200"></canvas>

        <!-- Doughnut Chart Container -->
        <canvas id="doughnutChart" width="400" height="200"></canvas>
    </div>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Script to initialize and render the charts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dummy data for the charts
        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Monthly Sales',
                data: [12, 19, 3, 5, 2, 3, 8],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Get the chart containers
        var barChartCtx = document.getElementById('barChart').getContext('2d');
        var lineChartCtx = document.getElementById('lineChart').getContext('2d');
        var pieChartCtx = document.getElementById('pieChart').getContext('2d');
        var doughnutChartCtx = document.getElementById('doughnutChart').getContext('2d');

        // Create the charts
        var barChart = new Chart(barChartCtx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var lineChart = new Chart(lineChartCtx, {
            type: 'line',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var pieChart = new Chart(pieChartCtx, {
            type: 'pie',
            data: chartData
        });

        var doughnutChart = new Chart(doughnutChartCtx, {
            type: 'doughnut',
            data: chartData
        });
    });
</script>
@endsection