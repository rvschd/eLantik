<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMENTERIAN EKONOMI - Reset Kata Laluan</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-left">
            <img src="{{ asset('images/jata_negara.png') }}" alt="Logo">
            <div class="header-title">SISTEM PENGURUSAN PROFIL AHLI LEMBAGA PENGARAH</div>
        </div>
    </header>

    <div class="login-container">
        <h2>Tukar Kata Laluan</h2>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Emel</label>
            </div>
            <button type="submit" class="btn-login">
                Hantar Pautan Reset
            </button>
        </form>
        <div class="text-center">
            <p>Kembali ke <a href="{{ url('login') }}" class="no-underline">Log Masuk</a></p>
        </div>
    </div>

    <footer>
        <div class="footer-logo">
            <img src="{{ asset('images/malaysia_madani.jpg') }}" alt="Logo">
            <p>✉️ukk@ekonomi.gov.my ☏+603 8090294 / 2095 <br>Kementerian Ekonomi<br>Menara Prisma<br>No. 26 Persiaran
                Perdana, Presint 3<br>Pusat Pentadbiran Kerajaan Persekutuan<br>Putrajaya</p>
        </div>
    </footer>
</body>

</html>
