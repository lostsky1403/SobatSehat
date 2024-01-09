<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sobat Sehat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('Sobatsehat/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com" crossorigin') }} ">
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap') }}"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="styleshee">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Sobatsehat/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Sobatsehat/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Sobatsehat/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="{{ asset('views.index') }}" class="navbar-brand">
                    <img class="img-fluid" src="{{ asset('Sobatsehat/img/Logo.png') }}" alt="" width="180">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/index') }}" class="nav-item nav-link active">Beranda </a>
                        <a href="{{ url('/artikel') }}" class="nav-item nav-link">Artikel</a>
                        <a href="{{ url('/lokasi') }}" class="nav-item nav-link">lokasi </a>
                        <a href="{{ url('/kegiatan') }}" class="nav-item nav-link">Kegiatan</a>
                    </div>
                    @if (Auth::check())
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle py-2 px-4 d-none d-lg-inline-block"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ asset('/login') }}"
                            class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Login</a>
                        <div><a href="{{ url('/register') }}"
                                class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Registrasi</a></div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
