<!-- resources/views/appointments/sejarah_lantikan.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment History - eLantik</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">eLantik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('appointments.index') }}">Candidate List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.memo') }}">Appointment Memos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.surat_pelantikan') }}">Appointment Letters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.sejarah_lantikan') }}">Appointment History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments.search') }}">Search Candidates</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="text-center">Appointment History</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Candidate</th>
                    <th>Position</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-01-01</td>
                    <td>John Doe</td>
                    <td>Position A</td>
                    <td>Appointed</td>
                </tr>
                <tr>
                    <td>2023-01-15</td>
                    <td>Jane Smith</td>
                    <td>Position B</td>
                    <td>Appointed</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>