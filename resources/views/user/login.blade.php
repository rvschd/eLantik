<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMENTERIAN EKONOMI</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="header-left">
            <img src="{{ asset('images/jata_negara.png') }}" alt="Logo">
            <div class="header-title">SISTEM PENGURUSAN PROFIL AHLI LEMBAGA PENGARAH</div>
        </div>
    </header>

    <div class="login-container">
        <h2>Log Masuk</h2>
        <form action="{{ route('dashboard') }}" method="GET">
            @csrf
            <div class="form-group">
                <input type="text" id="id" name="id" required placeholder=" ">
                <label for="id">ID Pengguna</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Kata Laluan</label>
                <button type="button" class="toggle-password" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

            <button type="submit" class="btn-login">
                Log Masuk ↪
                <path fill-rule="evenodd"
                    d="M10.354 3.646a.5.5 0 0 1 0 .708L7.707 7H14.5a.5.5 0 0 1 0 1H7.707l2.647 2.646a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0z" />
                </svg>
            </button>
        </form>
        <div class="text-center">
            <div class="text-center">
                <a href="{{ route('password') }}" class="footer-link" style="text-decoration: none;">Lupa Kata
                    Laluan?</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-logo">
            <img src="{{ asset('images/malaysia_madani.jpg') }}" alt="Logo">
            <p>✉️ukk@ekonomi.gov.my ☏+603 8090294 / 2095 <br>Kementerian Ekonomi<br>Menara Prisma<br>No. 26 Persiaran
                Perdana, Presint 3<br>Pusat Pentadbiran Kerajaan Persekutuan<br> Putrajaya</p>
        </div>
    </footer>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.toggle-password i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.classList.remove('fa-eye');
                toggleButton.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleButton.classList.remove('fa-eye-slash');
                toggleButton.classList.add('fa-eye');
            }
        }
    </script>

</body>

</html>
