<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/dashboard_style.css') }}" rel="stylesheet" />


    @livewireStyles
</head>

<body>
    @if(Auth::user()->utype === 'Admin')
    <nav class="sb-topnav navbar navbar-expand">
        <a class="navbar-brand ps-3" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 search-group">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."aria-describedby="btnNavbarSearch" />
                <button class="btn search-icon" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST">
                            @csrf
                        </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="{{ route('index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Portfolio
                        </a>
                        <a class="nav-link" href="{{ route('admin.main') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Main
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout1" aria-expanded="false" aria-controls="collapseLayout1">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                About
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('admin.about') }}">About Me</a>
                                    <a class="nav-link" href="{{ route('admin.skill') }}">Skills</a>
                                </nav>
                            </div>
                        <a class="nav-link" href="{{ route('admin.project') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                            Project
                        </a>
                        <a class="nav-link" href="{{route('admin.service')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                            Services
                        </a>
                        <a class="nav-link" href="{{ route('admin.team') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Team
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout2" aria-expanded="false" aria-controls="collapseLayout2">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Contact
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.admincontact') }}">Admin Contact</a>
                                <a class="nav-link" href="{{ route('admin.viewcontact') }}">Contact</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            {{ $slot }}

            <footer class="py-2 mt-auto">
                <div class="container-fluid px-4">
                    <div class="copyright">
                        <div class="text-muted">Copyright &copy;<span> Nang Myintzu </span> 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @elseif(Auth::user()->utype == 'User')
        <div class="container-fluid wrongurlalert">
            <div class="alertbox">
                <div><i class="fas fa-long-arrow-alt-left"></i> <a href="{{ route('index') }}">Go Back</a></div>
            </div>
        </div>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/browser-sync-config.min.js" integrity="sha512-EB8apezGUZ81JQbVsDM15YCJpuyzLZB9eQxiyCukN4DdXYfP6C/+gDjF/wsCvK/9MXDi5u6sYMfKF2STJCRsvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard_js.js') }}"></script>
    @livewireScripts
</body>

</html>
