<!-- resources/views/officer_profiles/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
    <title>Officer Module</title>
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background for the body */
        }

        .navbar {
            background-color: #343a40;
            /* Dark background for the navbar */
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff;
            /* White text for navbar items */
        }

        .nav-link:hover {
            color: #ffc107;
            /* Yellow on hover for links */
        }

        .table th {
            background-color: #e9ecef;
            /* Light gray header */
        }

        .card {
            margin-bottom: 20px;
            /* Spacing for cards */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Officer Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('officer_profiles.index') }}">Officers</a>
                    </li>
                    <!-- Add more links as needed -->
                </ul>
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-outline-light me-2">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <h1 class="mb-4">List of Officers (Grade 54 and above)</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <label for="kategori" class="form-label">Kategori:</label>
                    <select id="kategori" class="form-select">
                        <option value="">Select Kelayakan/Pengalaman</option>
                        <option value="Kelayakan">Kelayakan</option>
                        <option value="Pengalaman">Pengalaman</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="bahagian" class="form-label">Bahagian:</label>
                    <div class="input-group">
                        <select id="bahagian" class="form-select">
                            <option value="">Select Bahagian</option>
                            <option value="Bahagian A">Bahagian A</option>
                            <option value="Bahagian B">Bahagian B</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="button" id="addBahagianBtn">Add Bahagian</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addOfficerModal">Add Officer</button>

        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>IC</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($officers as $officer)
                <tr>
                    <td>{{ $officer['name'] }}</td>
                    <td>{{ $officer['ic'] }}</td>
                    <td>{{ $officer['position'] }}</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editOfficerModal{{ $officer['id'] }}">Edit</button>
                        <form action="{{ route('officer_profiles.destroy', $officer['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- Edit Officer Modal -->
                <div class="modal fade" id="editOfficerModal{{ $officer['id'] }}" tabindex="-1" aria-labelledby="editOfficerModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editOfficerModalLabel">Edit Officer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('officer_profiles.update', $officer['id']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $officer['name'] }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ic" class="form-label">IC</label>
                                        <input type="text" class="form-control" id="ic" name="ic" value="{{ $officer['ic'] }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" value="{{ $officer['position'] }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Officer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </main>

    <!-- Add Officer Modal -->
    <div class="modal fade" id="addOfficerModal" tabindex="-1" aria-labelledby="addOfficerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOfficerModalLabel">Add Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('officer_profiles.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="ic" class="form-label">IC</label>
                            <input type="text" class="form-control" id="ic" name="ic" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Officer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script to add dynamic Bahagian -->
    <script>
        document.getElementById('addBahagianBtn').addEventListener('click', function() {
            const bahagianSelect = document.getElementById('bahagian');
            const newBahagian = prompt("Enter new Bahagian name:");

            if (newBahagian) {
                // Create new option element
                const newOption = document.createElement('option');
                newOption.value = newBahagian;
                newOption.text = newBahagian;

                // Add the new option to the dropdown
                bahagianSelect.appendChild(newOption);
                bahagianSelect.value = newBahagian; // Set the new option as selected
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>