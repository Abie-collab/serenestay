<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
      <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    @stack('styles')
</head>
<body class="bg-light">

    <!-- Header Navbar - Matching User Dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-luxury fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Serene<span>Stay</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.rooms*') ? 'active' : '' }}" href="{{ route('admin.rooms') }}">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}" href="{{ route('admin.categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Main Site</a> 
                    </li>
                </ul>
                <div class="navbar-buttons d-flex align-items-center">
                    <div class="dropdown">
                        <a class="btn btn-outline-light btn-sm dropdown-toggle px-3 py-2 border-0 d-flex align-items-center gap-2" href="#" role="button" id="userMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/avatar.jpg') }}" alt="Admin Avatar" class="rounded-circle" style="width: 28px; height: 28px; object-fit: cover; border: 1.5px solid var(--primary-color);">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenuLink">
                            <li><a class="dropdown-item py-2 small" href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-line me-2 text-muted"></i> Dashboard</a></li>
                            <li><a class="dropdown-item py-2 small" href="{{ route('admin.rooms') }}"><i class="fa-solid fa-hotel me-2 text-muted"></i> Manage Rooms</a></li>
                            <li><a class="dropdown-item py-2 small" href="{{ route('admin.categories') }}"><i class="fa-solid fa-tags me-2 text-muted"></i> Categories</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                              
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item py-2 small text-danger">
                                        <i class="fa-solid fa-right-from-bracket me-2"></i> Log Out
                                    </button>
                                </form>
                             

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Dashboard Section -->
    <main class="dashboard-wrapper" style="padding-top: 7rem;">
        <div class="container">
            <div class="row">
                
                <!-- Left Sidebar Menu -->
                <div class="col-lg-3 mb-4">
                    <div class="dashboard-sidebar">
                        
                        <!-- Profile Card -->
                        <div class="user-profile-widget">
                            <img src="{{ asset('assets/images/avatar.jpg') }}" alt="{{ Auth::user()->name }}" class="user-avatar">
                            <h5 class="user-name mb-1">{{ Auth::user()->name }}</h5>
                            <span class="user-email">{{ Auth::user()->email }}</span>
                            <span class="badge bg-warning text-dark mt-2 px-3 py-1 font-monospace small">
                                <i class="fa-solid fa-crown me-1"></i>ADMIN
                            </span>
                        </div>

                        <!-- Sidebar Navigation -->
                        <div class="nav flex-column nav-pills dashboard-menu" id="dashboard-tabs" role="tablist" aria-orientation="vertical">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                                <i class="fa-solid fa-house-chimney"></i> Overview
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.rooms*') ? 'active' : '' }}" href="{{ route('admin.rooms') }}">
                                <i class="fa-solid fa-hotel"></i> Manage Rooms
                            </a>
                            <a class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}" href="{{ route('admin.categories') }}">
                                <i class="fa-solid fa-tags"></i> Categories
                            </a>     
                        </div>
                        
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-lg-9">
                    @if (session('success'))
                        <div class="alert alert-success border-0 rounded-3 d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger border-0 rounded-3 d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-circle-exclamation me-2"></i>
                            {{ session('error') }}
                        </div>
                    @endif

                    @yield('content')
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand text-white fs-3 fw-bold mb-3 d-inline-block" href="{{ route('admin.dashboard') }}">Serene<span>Stay</span></a>
                    <p class="mt-2 text-white-50">Our mission is to construct a modern sanctuary for travel lovers, combining high-end design aesthetics with gold-standard services.</p>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 ms-lg-auto">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><a href="{{ route('admin.rooms') }}">Manage Rooms</a></li>
                        <li class="mb-2"><a href="{{ route('admin.categories') }}">Categories</a></li>
                        <li class="mb-2"><a href="{{ route('dashboard') }}">Member Dashboard</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contacts</h5>
                    <ul class="list-unstyled mt-3 text-white-50">
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-primary me-2"></i> 777 Luxury Boulevard, Las Vegas, NV</li>
                        <li class="mb-2"><i class="fa-solid fa-phone text-primary me-2"></i> +1 (800) 555-SERENES</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope text-primary me-2"></i> reservations@serenestay.com</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom text-center text-white-50">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2026 SERENESTAY. Designed for Luxury Voyagers. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="{{asset('/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>