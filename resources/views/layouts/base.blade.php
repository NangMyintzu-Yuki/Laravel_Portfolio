<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- meta charset -->
    <meta charset="utf-8">
    <!-- site title -->
    <title>Nang Myintzu</title>
    <!-- meta description -->
    <meta name="description" content="">
    <!-- mobile viwport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard_style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @livewireStyles
</head>

<body>
    {{-- navbar start --}}
    <section class="nav">
        <div class="container-fluid">
            <div class="row">

                <nav class="navbar navbar-expand-lg fixed-top scroll">
                    <div class="container">
                        <a class="navbar-brand fw-bold" href="#">Port<span>folio</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars" aria-hidden="true"></i></span>
                        </button>
                        <div class="collapse navbar-collapse nav-menu" id="navbarNav">
                            <ul class="navbar-nav ms-auto fs-6">
                                <li class="nav-item">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#project">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                @if(Route::has('login'))
                                  @auth
                                    @if(Auth::user()->utype === 'Admin')
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" title="My Account" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: var(--first-color);">
                                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                                @csrf</form>

                                            </ul>
                                        </div>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                        @csrf
                                        </form>
                                    @endif

                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                               @endauth
                              @endif
                        </ul>
                    </div>
                    </div>
                </nav>

            </div>
        </div>
    </section>
    {{-- navbar end --}}

    {{ $slot }}
    

    {{-- footer --}}
    <footer class="py-2 mt-auto">
        <div class="container-fluid px-4">
            <div class="copyright">
                <div class="text-muted">Copyright &copy; 2021,<span> Nang Myintzu. </span> All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    {{-- footer --}}

    {{-- js files --}}
    <script src="{{ asset('assets/js/dashboard_js.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
    integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireScripts
</body>

</html>
