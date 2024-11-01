<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMENTERIAN EKONOMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</head>

<div class="wrapper">
    <aside id="sidebar" class="js-sidebar">
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">Sistem Pengurusan Profil<br>Ahli Lembaga Pengarah</a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">Selamat Datang !</li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Papan Pemuka
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                        aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                        Dashboard
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('pencalonan') }}" class="sidebar-link">Pencalonan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('pelantikan') }}" class="sidebar-link">Pelantikan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('pengurusan') }}" class="sidebar-link">Pengurusan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('laporan') }}" class="sidebar-link">Laporan</a>
                        </li>
                    </ul>

                <li class="sidebar-item">
                    <a href="{{ route('arkib') }}" class="sidebar-link collapsed" aria-expanded="false">
                        <i class="fa-solid fa-sliders pe-2"></i> Arkib
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('penyelenggaraan') }}" class="sidebar-link collapsed" aria-expanded="false">
                        <i class="fa-regular fa-user pe-2"></i> Penyelenggaraan
                    </a>
                </li>
        </div>
    </aside>
    <div class="main">
        <nav class="navbar navbar-expand px-3 border-bottom">
            <button class="btn" id="sidebar-toggle" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                            <img src="{{ asset('images/profile.jpg') }}" class="avatar img-fluid rounded"
                                alt="image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profil</a>
                            <a href="#" class="dropdown-item">Tetapan</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h4>Menu Utama</h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 illustration">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="col-6">
                                        <div class="p-3 m-1">
                                            <h4>Welcome Back, Admin</h4>
                                            <p class="mb-0">Admin Dashboard, CodzSword</p>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-end text-end">
                                        <img src="{{ asset('images/customer-support.jpg') }}"
                                            class="img-fluid illustration-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h4 class="mb-2">$ 78.00</h4>
                                        <p class="mb-2">Total Earnings</p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">+9.0%</span>
                                            <span class="text-muted">Since Last Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">Basic Table</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <a href="#" class="theme-toggle">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </a>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                    </div>
                    <div class="col-6 text-end">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
