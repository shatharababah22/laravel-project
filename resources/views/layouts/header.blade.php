<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/HELPZ icon.png') }}">
    <!-- Favicon -->
    <link href={{ asset('img/favicon.ico') }} rel="icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href={{ asset('lib/flaticon/font/flaticon.css') }} rel="stylesheet">

    {{-- ================ --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- ========================== --}}

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link href={{ asset('lib/animate/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{ asset('css/style.css') }} rel="stylesheet">
    {{-- <link href={{ asset('css/style.css') }} rel="stylesheet"> --}}
    <link href="{{ asset('css/volunteer.css') }}" rel="stylesheet">

    <style>
        .read-more-container{
    display: flex;
    flex-direction: column;
    color: #111;
    gap: 1rem;
}

/* .container1{
    padding: 2rem;
    background-color: #fff;
    border-radius: 2px;
    line-height: 1.4rem;
    box-shadow: 0 0 1rem rgba(0,0,0,.1);
} */

.read-more-btn{
    color: #0984e3;
    cursor: pointer;
}

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: inline;
}
    </style>
</head>

<body>
    <!-- Top Bar Start -->

    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark nav-sticky ">
        <div class="container-fluid ">
            <img src="{{ asset('images/HELPZ LOGO.png') }}" style="width:15%" alt="">
            <button type="button" class="navbar-toggler nav-sticky" data-toggle="collapse" data-target="#home">
                <span class="navbar-toggler-icon nav-sticky"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between nav-sticky" id="navbarCollapse">
                <div class="navbar-nav ml-auto nav-sticky">
                    <a href="{{ url('/') }}" class="nav-item nav-link active nav-sticky">Home</a>
                    <a href="#off" class="nav-item nav-link nav-sticky">Our Offerings</a>
                    <a href="#ach" class="nav-item nav-link nav-sticky">Our Achievements</a>
                    <a href="#about" class="nav-item nav-link nav-sticky">About</a>
                    <a href="#contact" class="nav-item nav-link nav-sticky">Contact</a>
                    <div class="navbar-nav ml-5">
                        @if (Auth::check())
                            <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                class="nav-item nav-link nav-sticky">{{ Auth::user()->name }}</a>
                            <form method="POST" class="nav-item nav-link nav-sticky" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                             onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="/login" class="nav-item nav-link nav-sticky">Login</a>
                            <a href="/register" class="nav-item nav-link nav-sticky">Regester</a>
                        @endif
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
