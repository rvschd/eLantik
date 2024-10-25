<!-- resources/views/reports/profil_alp.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report: ALP Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar for Reports Module -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">eLantik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('reports.nama_nokp_jawatan') }}">Report on Name, IC, Position</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.pegawai_belum_dilantik') }}">Unappointed Officers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.ahli_lembaga_tamat_pendidikan') }}">Expired Board Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.laporan_ringkas_profil') }}">Brief Officer Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports.profil_alp') }}">ALP Profile Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="text-center">Report: ALP Profile</h3>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>IC Number</th>
                    <th>Position</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Data, replace with dynamic data -->
                <tr>
                    <td>George Red</td>
                    <td>444555-66-7788</td>
                    <td>ALP Member</td>
                    <td>2023-02-01</td>
                    <td>2025-02-01</td>
                </tr>
                <tr>
                    <td>Hannah Blue</td>
                    <td>555666-77-8899</td>
                    <td>ALP Member</td>
                    <td>2022-03-01</td>
                    <td>2024-03-01</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>