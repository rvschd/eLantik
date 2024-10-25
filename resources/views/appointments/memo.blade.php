<!-- resources/views/appointments/memo.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Appointment Memos - eLantik</title>
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
        <h3 class="text-center">Upload Appointment Memo</h3>

        <form>
            <div class="mb-3">
                <label for="memoFile" class="form-label">Choose File</label>
                <input type="file" class="form-control" id="memoFile" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <h5 class="mt-4">Uploaded Memos</h5>
        <ul class="list-group">
            <li class="list-group-item">Memo 1 <a href="#" class="btn btn-sm btn-danger float-end">Delete</a></li>
            <li class="list-group-item">Memo 2 <a href="#" class="btn btn-sm btn-danger float-end">Delete</a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>