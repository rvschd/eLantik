<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Manage Companies/Agencies</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
            margin-bottom: 30px;
        }

        table {
            margin-top: 20px;
        }

        th {
            background-color: #e9ecef;
        }

        .btn {
            margin-right: 5px;
        }

        .container {
            margin-top: 50px;
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
        <h1>Manage Companies/Agencies</h1>

        <!-- Button trigger modal for adding new company -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCompanyModal">
            Add New Company/Agency
        </button>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Agency</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company['name'] }}</td>
                    <td>{{ $company['agency'] }}</td>
                    <td>
                        <!-- Button trigger modal for editing company -->
                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editCompanyModal_{{ $company['id'] }}">
                            Edit
                        </button>

                        <!-- Button trigger modal for deleting company -->
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCompanyModal_{{ $company['id'] }}">
                            Delete
                        </button>
                    </td>
                </tr>

                <!-- Edit Company Modal -->
                <div class="modal fade" id="editCompanyModal_{{ $company['id'] }}" tabindex="-1" aria-labelledby="editCompanyModalLabel_{{ $company['id'] }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('maintenance.syarikat_agensi.update', $company['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCompanyModalLabel_{{ $company['id'] }}">Edit Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyName" name="name" value="{{ $company['name'] }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="agencyName" class="form-label">Agency</label>
                                        <input type="text" class="form-control" id="agencyName" name="agency" value="{{ $company['agency'] }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete Company Modal -->
                <div class="modal fade" id="deleteCompanyModal_{{ $company['id'] }}" tabindex="-1" aria-labelledby="deleteCompanyModalLabel_{{ $company['id'] }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('maintenance.syarikat_agensi.delete', $company['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteCompanyModalLabel_{{ $company['id'] }}">Delete Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the company <strong>{{ $company['name'] }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
            </tbody>
        </table>

        <!-- Display message if no companies found -->
        @if(empty($companies))
        <div class="alert alert-info mt-3">
            No companies or agencies found.
        </div>
        @endif
    </div>

    <!-- Add Company Modal -->
    <div class="modal fade" id="addCompanyModal" tabindex="-1" aria-labelledby="addCompanyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('maintenance.syarikat_agensi.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCompanyModalLabel">Add New Company/Agency</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="agencyName" class="form-label">Agency</label>
                            <input type="text" class="form-control" id="agencyName" name="agency" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>