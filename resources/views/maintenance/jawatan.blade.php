<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Positions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            /* Remove default margin to eliminate gaps */
        }

        .card {
            margin-bottom: 20px;
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

    <div class="container mt-4">
        <h1 class="text-center mb-4">Manage Positions</h1>

        <!-- Add Position Button -->
        <div class="text-end mb-3"> <!-- Changed to 'text-end' for Bootstrap 5 -->
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPositionModal">
                <i class="fas fa-plus-circle"></i> Add New Position
            </button>
        </div>

        <!-- Positions List -->
        <div class="row">
            @foreach($positions as $position)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $position['title'] }}</h5>
                        <p class="card-text">ID: {{ $position['id'] }}</p>
                        <div class="text-end"> <!-- Changed to 'text-end' for Bootstrap 5 -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPositionModal" data-id="{{ $position['id'] }}" data-title="{{ $position['title'] }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <form action="{{ route('maintenance.positions.delete', $position['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this position?');">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(empty($positions))
        <div class="alert alert-info text-center mt-4">
            No positions available.
        </div>
        @endif
    </div>

    <!-- Add Position Modal -->
    <div class="modal fade" id="addPositionModal" tabindex="-1" role="dialog" aria-labelledby="addPositionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('maintenance.positions.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPositionModalLabel">Add New Position</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Position Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Position</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Position Modal -->
    <div class="modal fade" id="editPositionModal" tabindex="-1" role="dialog" aria-labelledby="editPositionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('maintenance.positions.update', 1) }}" method="POST" id="editPositionForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editPositionModalLabel">Edit Position</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editTitle">Position Title</label>
                            <input type="text" class="form-control" id="editTitle" name="title" required>
                            <input type="hidden" id="editPositionId" name="position_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update Position</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Script to populate the edit modal with existing position data
        $('#editPositionModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var title = button.data('title'); // Extract info from data-* attributes

            // Update the modal's content.
            var modal = $(this);
            modal.find('#editPositionId').val(id);
            modal.find('#editTitle').val(title);
            // Update form action for the edit
            var actionUrl = "{{ route('maintenance.positions.update', ':id') }}";
            actionUrl = actionUrl.replace(':id', id);
            modal.find('#editPositionForm').attr('action', actionUrl);
        });
    </script>
</body>

</html>