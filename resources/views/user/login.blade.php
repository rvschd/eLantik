<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - eLantik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #7a8998;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            position: relative;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #7a8998;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .footer-link {
            color: #7a8998;
            text-decoration: none;
        }

        .footer-link:hover {
            text-decoration: underline;
        }

        .logo-img {
            max-height: 80px;
        }

        .footer-img {
            max-height: 60px;
            margin-bottom: 10px;
        }

        .card-footer {
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <!-- Jata Negara Image at the top -->
                        <img src="{{ asset('images/jata_negara.png') }}" alt="Jata Negara" class="logo-img">
                        <h3>Login to eLantik</h3>
                    </div>
                    <div class="card-body">
                        <!-- Fake Login Form -->
                        <form action="{{ route('fakeLogin') }}" method="POST">
                            @csrf
                            <!-- Email or Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <!-- Dropdown for Main Modules -->
                            <div class="mb-3">
                                <label for="module" class="form-label">Select Module</label>
                                <select class="form-select" id="module" name="module" required>
                                    <option value="" disabled selected>Select a module</option>
                                    <option value="{{ route('officer_profiles.index') }}">Modul Pencalonan</option>
                                    <option value="{{ route('appointments.index') }}">Modul Pelantikan</option>
                                    <option value="{{ route('board_members.index') }}">Modul Pengurusan</option>
                                    <option value="{{ route('archives.tamat_tempoh') }}">Modul Arkib</option>
                                    <option value="{{ route('reports.nama_nokp_jawatan') }}">Modul Laporan</option>
                                    <option value="{{ route('dashboard.index') }}">Dashboard</option>
                                    <option value="{{ route('maintenance.syarikat_agensi') }}">Modul Penyelenggaraan
                                    </option>
                                    <option value="{{ route('user.login') }}">Modul Pengguna</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center">
                        <!-- Malaysia Madani Image above the footer links -->
                        <div>
                            <img src="{{ asset('images/malaysia_madani.jpg') }}" alt="Malaysia Madani"
                                class="footer-img">
                        </div>
                        <a href="{{ route('password.request') }}" class="footer-link">Forgot Your Password?</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
