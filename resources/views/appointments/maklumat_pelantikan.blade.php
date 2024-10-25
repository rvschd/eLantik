<!-- resources/views/appointments/maklumat_pelantikan.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details - eLantik</title>
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
        <h3 class="text-center">Appointment Details</h3>

        <div class="mb-3">
            <strong>Candidate:</strong> John Doe
        </div>
        <div class="mb-3">
            <strong>Position:</strong> Position A
        </div>
        <div class="mb-3">
            <strong>Appointment Date:</strong> 2023-01-01
        </div>
        <div class="mb-3">
            <strong>Status:</strong> Active
        </div>

        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back to Candidate List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>