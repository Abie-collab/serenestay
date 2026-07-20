<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed | AURA Resort</title>
    <meta name="description" content="Thank you for booking your stay. Your reservation at AURA Resort has been successfully confirmed.">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-luxury fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">AURA<span>RESORT</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link animate-fade" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="rooms.html">Rooms & Suites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#testimonials">Reviews</a>
                    </li>
                </ul>
                <div class="navbar-buttons">
                    <a href="login.html" class="btn btn-outline-light btn-sm px-4 py-2 me-2 border-0">Sign In</a>
                    <a href="register.html" class="btn btn-luxury btn-sm">Join Club</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Confirmation Card -->
    <main class="container" style="padding-top: 8rem; padding-bottom: 5rem;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="confirmation-card">
                    <div class="success-icon-circle">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h2 class="mb-2 text-dark">Reservation Confirmed!</h2>
                    <p class="text-muted mb-4">Thank you for booking with AURA Resort. We are preparing for your luxurious experience.</p>
                    
                    <div class="alert alert-success border-0 rounded-3 text-start mb-4 py-3 small d-flex align-items-center gap-3">
                        <span class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;"><i class="fa-solid fa-envelope"></i></span>
                        <div>
                            We have sent a comprehensive receipt and booking copy to your email address: <strong>john.doe@example.com</strong>.
                        </div>
                    </div>

                    <!-- Summary details card -->
                    <div class="card card-luxury border border-muted bg-white text-start p-4 mb-4">
                        <h5 class="card-title border-bottom pb-2 mb-3 text-dark d-flex justify-content-between">
                            <span>Reservation Summary</span>
                            <span class="text-primary font-monospace fw-bold">#AURA-2026-998822</span>
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-12">
                                <span class="text-muted d-block small text-uppercase fw-bold">Suite Booked</span>
                                <strong class="text-dark">Premium Executive Suite</strong>
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="text-muted d-block small text-uppercase fw-bold">Guests</span>
                                <strong class="text-dark">2 Adults</strong>
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="text-muted d-block small text-uppercase fw-bold">Dates</span>
                                <strong class="text-dark">Jul 20, 2026 &mdash; Jul 23, 2026 (3 Nights)</strong>
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="text-muted d-block small text-uppercase fw-bold">Total Charged</span>
                                <strong class="text-primary fs-5">$1,480.00</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex flex-sm-row flex-column justify-content-center gap-3 mt-4">
                        <a href="dashboard.html" class="btn btn-dark-luxury px-4 py-3"><i class="fa-solid fa-chart-line me-2"></i>Go to Dashboard</a>
                        <a href="#" class="btn btn-outline-luxury px-4 py-3" onclick="window.print(); return false;"><i class="fa-solid fa-print me-2"></i>Print Receipt</a>
                        <a href="index.html" class="btn btn-link text-muted py-3 text-decoration-none">Return Home</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand text-white fs-3 fw-bold mb-3 d-inline-block" href="index.html">AURA<span>RESORT</span></a>
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
                        <li class="mb-2"><a href="rooms.html">Rooms & Suites</a></li>
                        <li class="mb-2"><a href="index.html#services">Our Services</a></li>
                        <li class="mb-2"><a href="login.html">Member Portal</a></li>
                        <li class="mb-2"><a href="register.html">Loyalty Program</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contacts</h5>
                    <ul class="list-unstyled mt-3 text-white-50">
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-primary me-2"></i> 777 Luxury Boulevard, Las Vegas, NV</li>
                        <li class="mb-2"><i class="fa-solid fa-phone text-primary me-2"></i> +1 (800) 555-AURA</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope text-primary me-2"></i> reservations@auraresort.com</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom text-center text-white-50">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2026 AURA Resort. Designed for Luxury Voyagers. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
