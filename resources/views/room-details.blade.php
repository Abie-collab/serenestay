<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Executive Suite Details | AURA Resort</title>
    <meta name="description" content="View detailed features, photos, and reviews of the Premium Executive Suite. Reserve your luxury stay today.">
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
                        <a class="nav-link" href="index.html">Home</a>
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

    <!-- Subpage Hero banner -->
    <section class="py-5 text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
        <div class="container py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="rooms.html" class="text-white-50 text-decoration-none">Rooms</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Premium Executive Suite</li>
                </ol>
            </nav>
            <h1 class="text-white mb-0">Premium Executive Suite</h1>
        </div>
    </section>

    <!-- Room Details Section -->
    <main class="container my-5">
        <div class="row">
            
            <!-- Left Side Content -->
            <div class="col-lg-8 mb-4">
                
                <!-- Main Gallery -->
                <section class="mb-5">
                    <div class="room-gallery-main">
                        <img src="assets/images/suite.jpg" alt="Premium Executive Suite Main Image" id="mainGalleryImage">
                    </div>
                    <div class="room-gallery-thumbs">
                        <div class="gallery-thumb active" onclick="document.getElementById('mainGalleryImage').src='assets/images/suite.jpg'; this.parentElement.querySelector('.active').classList.remove('active'); this.classList.add('active');">
                            <img src="assets/images/suite.jpg" alt="Gallery 1">
                        </div>
                        <div class="gallery-thumb" onclick="document.getElementById('mainGalleryImage').src='assets/images/deluxe.jpg'; this.parentElement.querySelector('.active').classList.remove('active'); this.classList.add('active');">
                            <img src="assets/images/deluxe.jpg" alt="Gallery 2">
                        </div>
                        <div class="gallery-thumb" onclick="document.getElementById('mainGalleryImage').src='assets/images/penthouse.jpg'; this.parentElement.querySelector('.active').classList.remove('active'); this.classList.add('active');">
                            <img src="assets/images/penthouse.jpg" alt="Gallery 3">
                        </div>
                        <div class="gallery-thumb" onclick="document.getElementById('mainGalleryImage').src='assets/images/hero.jpg'; this.parentElement.querySelector('.active').classList.remove('active'); this.classList.add('active');">
                            <img src="assets/images/hero.jpg" alt="Gallery 4">
                        </div>
                    </div>
                </section>

                <!-- Room Description and Details -->
                <section class="mb-5">
                    <h3 class="mb-4 text-dark border-bottom pb-2">Description</h3>
                    <p class="text-muted">The Premium Executive Suite is a hallmark of luxury design at AURA Resort. Boasting a massive private living room separate from the master bedroom, this suite is designed to accommodate both executive travelers requiring functional workspace and leisure couples looking for ultimate rest.</p>
                    <p class="text-muted">From the private terrace terrace, you can enjoy stunning, uninterrupted sunrises over the azure ocean waters. Custom velvet lounge seating, marble work desks, and smart temperature panels throughout ensure comfort is constantly at your control.</p>
                    
                    <div class="row my-5 text-center g-3">
                        <div class="col-md-3 col-6">
                            <div class="border rounded p-3 bg-white shadow-sm">
                                <i class="fa-solid fa-maximize text-primary fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-bold">75 m² / 807 ft²</h6>
                                <span class="text-muted small">Total Space</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border rounded p-3 bg-white shadow-sm">
                                <i class="fa-solid fa-users text-primary fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-bold">3 Guests Max</h6>
                                <span class="text-muted small">Occupancy</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border rounded p-3 bg-white shadow-sm">
                                <i class="fa-solid fa-bed text-primary fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-bold">King Bed</h6>
                                <span class="text-muted small">Bed Setup</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border rounded p-3 bg-white shadow-sm">
                                <i class="fa-solid fa-mountain-sun text-primary fs-3 mb-2"></i>
                                <h6 class="mb-0 fw-bold">Ocean View</h6>
                                <span class="text-muted small">Balcony Sight</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Amenities Grid -->
                <section class="mb-5">
                    <h3 class="mb-4 text-dark border-bottom pb-2">Premium Amenities</h3>
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-wifi"></i>
                                <span>High-Speed Wi-Fi</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-hot-tub-person"></i>
                                <span>Wellness Spa Access</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-mug-saucer"></i>
                                <span>Complimentary Breakfast</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-snowflake"></i>
                                <span>Smart AC Climate</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-glass-water"></i>
                                <span>Premium Minibar</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-bath"></i>
                                <span>Marble Bath Tub</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-tv"></i>
                                <span>Smart TV 65"</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-vault"></i>
                                <span>Electronic Safe</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="amenity-card">
                                <i class="fa-solid fa-person-room-service"></i>
                                <span>24-Hour Room Service</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Reviews and Comments -->
                <section class="mb-5">
                    <h3 class="mb-4 text-dark border-bottom pb-2">Guest Feedback (3)</h3>
                    
                    <div class="card card-luxury p-4 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/images/avatar.jpg" alt="Guest" class="rounded-circle" style="width: 45px; height: 45px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-0">Emma Johansson</h6>
                                    <span class="text-muted small">Stayed in May 2026</span>
                                </div>
                            </div>
                            <div>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                            </div>
                        </div>
                        <p class="text-muted mb-0">"The room was gorgeous, matching the photos precisely. Check-in was effortless, and the ocean view from the balcony during breakfast is something we will never forget. Exceptional stay!"</p>
                    </div>

                    <div class="card card-luxury p-4 mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="assets/images/avatar.jpg" alt="Guest" class="rounded-circle" style="width: 45px; height: 45px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-0">Julian Mercer</h6>
                                    <span class="text-muted small">Stayed in April 2026</span>
                                </div>
                            </div>
                            <div>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </div>
                        </div>
                        <p class="text-muted mb-0">"Very spacious and incredibly quiet suite. The bed comfort is 10/10. The only critique is that room service took a bit long during peak dinner hours, but the food quality compensated for the wait."</p>
                    </div>
                </section>

            </div>

            <!-- Right Side Booking Widget -->
            <div class="col-lg-4">
                <div class="card-luxury p-4 sticky-summary">
                    <h4 class="mb-3 text-dark">Book Your Stay</h4>
                    <hr>
                    <form action="booking.html" method="GET">
                        <!-- Dates selection -->
                        <div class="mb-3">
                            <label for="check_in_details" class="form-label font-weight-bold small text-muted text-uppercase">Check-In</label>
                            <input type="date" id="check_in_details" class="form-control" value="2026-07-20" required>
                        </div>
                        <div class="mb-3">
                            <label for="check_out_details" class="form-label font-weight-bold small text-muted text-uppercase">Check-Out</label>
                            <input type="date" id="check_out_details" class="form-control" value="2026-07-23" required>
                        </div>
                        <div class="mb-4">
                            <label for="guests_details" class="form-label font-weight-bold small text-muted text-uppercase">Guests Count</label>
                            <select id="guests_details" class="form-select">
                                <option value="1">1 Guest</option>
                                <option value="2" selected>2 Guests</option>
                                <option value="3">3 Guests</option>
                            </select>
                        </div>

                        <!-- Price Breakdown -->
                        <h6 class="mb-3 text-dark small text-uppercase fw-bold">Price Calculation</h6>
                        <div class="price-item">
                            <span>$450 / night x 3 nights</span>
                            <strong>$1,350.00</strong>
                        </div>
                        <div class="price-item">
                            <span>Luxury Service Fee</span>
                            <strong>$50.00</strong>
                        </div>
                        <div class="price-item">
                            <span>City Occupancy Tax</span>
                            <strong>$80.00</strong>
                        </div>
                        <div class="price-total">
                            <span>Total Price</span>
                            <span>$1,480.00</span>
                        </div>

                        <button type="submit" class="btn btn-luxury w-100 py-3 mt-4"><i class="fa-solid fa-credit-card me-2"></i>Proceed to Checkout</button>
                    </form>
                    <div class="text-center mt-3">
                        <span class="text-muted small"><i class="fa-solid fa-shield-halved me-1 text-success"></i> Best Price Guarantee Secured</span>
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
