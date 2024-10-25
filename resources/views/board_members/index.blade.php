<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Board Members - eLantik</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">eLantik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('board_members.index') }}">Board Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Board Members List</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addMemberModal">Add Board Member</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data for Board Members -->
                <tr>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Chairman</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateMemberModal">Update</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#terminateMemberModal">Terminate</button>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#extendMemberModal">Extend</button>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#historyModal">History</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>Secretary</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateMemberModal">Update</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#terminateMemberModal">Terminate</button>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#extendMemberModal">Extend</button>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#historyModal">History</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Add Board Member Modal -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">Add Board Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Board Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Board Member Modal -->
    <div class="modal fade" id="updateMemberModal" tabindex="-1" aria-labelledby="updateMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateMemberModalLabel">Update Board Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="update-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="update-name" value="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="update-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="update-email" value="john@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="update-position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="update-position" value="Chairman" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Board Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Manage Extensions Modal -->
    <div class="modal fade" id="extendMemberModal" tabindex="-1" aria-labelledby="extendMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="extendMemberModalLabel">Manage Extensions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="extension-reason" class="form-label">Reason for Extension</label>
                            <textarea class="form-control" id="extension-reason" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Extension</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Termination Actions Modal -->
    <div class="modal fade" id="terminateMemberModal" tabindex="-1" aria-labelledby="terminateMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="terminateMemberModalLabel">Termination Actions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="termination-reason" class="form-label">Reason for Termination</label>
                            <textarea class="form-control" id="termination-reason" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Terminate Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment History Modal -->
    <div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="historyModalLabel">Appointment History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">2020-01-01: Appointed as Chairman</li>
                        <li class="list-group-item">2022-06-15: Re-appointed for another term</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>