<!-- resources/views/user/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile - eLantik</title>
    <!-- Bootstrap CSS (optional, replace with your styles if needed) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>User Profile</h3>
                    </div>
                    <div class="card-body">
                        <!-- Profile Information Section -->
                        <form action="#" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="John Doe" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="johndoe@example.com" required>
                            </div>

                            <!-- Phone (optional) -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="(123) 456-7890">
                            </div>

                            <!-- Position (or any other field) -->
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" name="position" value="Software Developer">
                            </div>

                            <!-- Profile Picture Upload (optional) -->
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                                <!-- Show dummy profile picture -->
                                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="mt-3" style="width: 150px;">
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success btn-block">Update Profile</button>
                            </div>
                        </form>
                    </div>

                    <!-- Optional: Change Password Section (dummy) -->
                    <div class="card-footer text-center">
                        <a href="{{ route('password.request') }}">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>