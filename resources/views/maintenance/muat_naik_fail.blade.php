<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .file-list {
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            list-style-type: none;
        }

        .file-list li {
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .file-list li .file-name {
            word-wrap: break-word;
            max-width: 70%;
        }

        .file-list li .file-actions {
            text-align: right;
        }

        .file-actions a {
            margin-left: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .file-actions a:hover {
            text-decoration: underline;
        }

        .no-files {
            text-align: center;
            color: #777;
            font-style: italic;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Modul Penyelenggaraan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.syarikat_agensi') }}">Manage Companies/Agencies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.users.index') }}">Manage Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.jawatan') }}">Manage Positions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.logs') }}">System Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.pejabat_bahagian') }}">Manage Offices/Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.status_pelantikan') }}">Manage Appointment Statuses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maintenance.muat_naik_fail') }}">File Upload Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Page Title -->
        <h1>File Upload Management</h1>

        <!-- Files List -->
        <ul class="file-list">
            @foreach($files as $file)
            <li>
                <span class="file-name">{{ $file }}</span>
                <div class="file-actions">
                    <a href="#">Download</a>
                    <a href="#">Delete</a>
                </div>
            </li>
            @endforeach
            @if(empty($files))
            <li class="no-files">No files available</li>
            @endif
        </ul>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>