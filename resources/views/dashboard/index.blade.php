<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - eLantik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">eLantik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="text-center">Dashboard</h3>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Vacancies</h5>
                        <p class="card-text">25</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Agencies</h5>
                        <p class="card-text">10</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Expirations</h5>
                        <p class="card-text">5</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Bar Chart for Vacancies -->
            <div class="col-md-4">
                <h5>Vacancies</h5>
                <canvas id="vacanciesChart"></canvas>
            </div>

            <!-- Bar Chart for ALP by Agency -->
            <div class="col-md-4">
                <h5>ALP by Agency</h5>
                <canvas id="alpChart"></canvas>
            </div>

            <!-- Bar Chart for Term Expirations -->
            <div class="col-md-4">
                <h5>Term Expirations</h5>
                <canvas id="termExpirationsChart"></canvas>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h5>Recent Activities</h5>
                <ul class="list-group">
                    <li class="list-group-item">User A logged in at 10:00 AM</li>
                    <li class="list-group-item">User B updated profile at 10:30 AM</li>
                    <li class="list-group-item">New vacancy added for Agency A</li>
                    <li class="list-group-item">User C logged out at 11:00 AM</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js Script -->
    <script>
        // Hardcoded Dummy Data for the charts
        const labels = ['Agency A', 'Agency B', 'Agency C', 'Agency D'];

        // Vacancies Dummy Data
        const vacanciesData = [12, 19, 3, 5];
        const alpData = [7, 11, 5, 8];
        const termExpirationsData = [2, 4, 7, 1];

        // Create Vacancies Chart
        const vacanciesCtx = document.getElementById('vacanciesChart').getContext('2d');
        const vacanciesChart = new Chart(vacanciesCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Vacancies',
                    data: vacanciesData,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Create ALP Chart
        const alpCtx = document.getElementById('alpChart').getContext('2d');
        const alpChart = new Chart(alpCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'ALP by Agency',
                    data: alpData,
                    backgroundColor: 'rgba(153, 102, 255, 0.6)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Create Term Expirations Chart
        const termExpirationsCtx = document.getElementById('termExpirationsChart').getContext('2d');
        const termExpirationsChart = new Chart(termExpirationsCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Term Expirations',
                    data: termExpirationsData,
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>