<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneStay| Luxury Hotel Booking System</title>
    <meta name="description" content="Experience high-end sanctuary in the heart of luxury. Book Deluxe Rooms, Luxury Suites, and Presidential Penthouses.">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-luxury fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Serene<span>Stay</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.html">Rooms & Suites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Reviews</a>
                    </li>
                </ul>
                <div class="navbar-buttons">
                    <a href="login.html" class="btn btn-outline-light btn-sm px-4 py-2 me-2 border-0">Sign In</a>
                    <a href="register.html" class="btn btn-luxury btn-sm">Join Club</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-white">
                    <h1 class="hero-title">Experience Sanctuary in the Heart of Luxury</h1>
                    <p class="hero-subtitle">Immerse yourself in world-class amenities, stunning views, and an uncompromised level of personalized service tailored for the modern voyager.</p>
                    <a href="rooms.html" class="btn btn-luxury btn-lg">Explore Suites</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Floating Search Widget -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-widget">
                    <form action="rooms.html" method="GET">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-3">
                                <label for="check_in" class="form-label">Check-In Date</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-calendar-days"></i></span>
                                    <input type="date" id="check_in" class="form-control border-start-0" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="check_out" class="form-label">Check-Out Date</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-calendar-days"></i></span>
                                    <input type="date" id="check_out" class="form-control border-start-0" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="guests" class="form-label">Guests</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-user-group"></i></span>
                                    <select id="guests" class="form-select border-start-0">
                                        <option value="1">1 Guest</option>
                                        <option value="2" selected>2 Guests</option>
                                        <option value="3">3 Guests</option>
                                        <option value="4">4 Guests</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="room_type" class="form-label">Suite Type</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-bed"></i></span>
                                    <select id="room_type" class="form-select border-start-0">
                                        <option value="all">All Rooms</option>
                                        <option value="deluxe">Deluxe Room</option>
                                        <option value="suite">Luxury Suite</option>
                                        <option value="penthouse">Penthouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-luxury w-100 py-3"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section id="services" class="py-5 mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Our Premium Services</h2>
                <p>Designed for complete peace of mind, physical rejuvenation, and absolute convenience during your stay at SereneStay.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-spa"></i>
                        <div>
                            <h5 class="mb-1">Wellness Spa</h5>
                            <p class="text-muted mb-0 small">Indulge in holistic therapies and massages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-utensils"></i>
                        <div>
                            <h5 class="mb-1">Fine Dining</h5>
                            <p class="text-muted mb-0 small">Michelin starred chef curation on-demand.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-water-ladder"></i>
                        <div>
                            <h5 class="mb-1">Infinity Pools</h5>
                            <p class="text-muted mb-0 small">Climatically adjusted pools with skyline view.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <div>
                            <h5 class="mb-1">Club Lounge</h5>
                            <p class="text-muted mb-0 small">Premium spirits and private business spaces.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-square-parking"></i>
                        <div>
                            <h5 class="mb-1">Valet Parking</h5>
                            <p class="text-muted mb-0 small">Complementary private safe valet parking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="amenity-card">
                        <i class="fa-solid fa-concierge-bell"></i>
                        <div>
                            <h5 class="mb-1">24/7 Concierge</h5>
                            <p class="text-muted mb-0 small">Dedicated support for travel bookings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Rooms Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Featured Rooms & Suites</h2>
                <p>Browse our handpicked luxury apartments designed to provide unmatched relaxation.</p>
            </div>
            
            <div class="row g-4">
                <!-- Room Card 1 -->
                <div class="col-md-4">
                    <div class="card card-luxury">
                        <div class="card-img-wrapper">
                            <span class="badge-luxury">Best Seller</span>
                            <img src="assets/images/deluxe.jpg" alt="Deluxe Room">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.8 (120 reviews)</span>
                                <span class="room-price">$250 <span>/ night</span></span>
                            </div>
                            <h4 class="card-title"><a href="room-details.html" class="text-decoration-none text-dark">Deluxe Double Room</a></h4>
                            <p class="text-muted small">Elegant double bedroom offering panoramic city views, high-speed connection, and plush marble bathrooms.</p>
                            <div class="room-amenities-icons mb-4">
                                <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                <span><i class="fa-solid fa-tv"></i> TV</span>
                                <span><i class="fa-solid fa-wind"></i> AC</span>
                            </div>
                            <div class="d-grid">
                                <a href="room-details.html" class="btn btn-luxury">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room Card 2 -->
                <div class="col-md-4">
                    <div class="card card-luxury">
                        <div class="card-img-wrapper">
                            <span class="badge-luxury">Popular</span>
                            <img src="assets/images/suite.jpg" alt="Luxury Suite">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 (84 reviews)</span>
                                <span class="room-price">$450 <span>/ night</span></span>
                            </div>
                            <h4 class="card-title"><a href="room-details.html" class="text-decoration-none text-dark">Premium Executive Suite</a></h4>
                            <p class="text-muted small">Generous living spaces with a private terrace overlooking the sea, fully equipped mini-bar, and master lounge.</p>
                            <div class="room-amenities-icons mb-4">
                                <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                <span><i class="fa-solid fa-hot-tub-person"></i> Spa</span>
                                <span><i class="fa-solid fa-mug-saucer"></i> Breakfast</span>
                            </div>
                            <div class="d-grid">
                                <a href="room-details.html" class="btn btn-luxury">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Room Card 3 -->
                <div class="col-md-4">
                    <div class="card card-luxury">
                        <div class="card-img-wrapper">
                            <span class="badge-luxury">Exclusive</span>
                            <img src="assets/images/penthouse.jpg" alt="Penthouse Suite">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 5.0 (32 reviews)</span>
                                <span class="room-price">$950 <span>/ night</span></span>
                            </div>
                            <h4 class="card-title"><a href="room-details.html" class="text-decoration-none text-dark">Presidential Penthouse</a></h4>
                            <p class="text-muted small">Our ultimate masterpiece. A multi-room layout featuring a private heated infinity pool, personal butler, and custom interior design.</p>
                            <div class="room-amenities-icons mb-4">
                                <span><i class="fa-solid fa-water-ladder"></i> Pool</span>
                                <span><i class="fa-solid fa-martini-glass-citron"></i> Butler</span>
                                <span><i class="fa-solid fa-shield"></i> VIP Safe</span>
                            </div>
                            <div class="d-grid">
                                <a href="room-details.html" class="btn btn-luxury">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="rooms.html" class="btn btn-outline-luxury">View All Rooms</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="section-title">
                <h2>Voices of Luxury</h2>
                <p>Read about the memorable experiences of guests who selected SereneStay for their travels.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-luxury p-4 h-100 d-flex flex-column justify-content-between">
                        <p class="text-muted mb-4">"The Presidential Penthouse was an absolute dream. The private infinity pool offered stunning evening views of the city. The service was impeccable."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/avatar.jpg" alt="Victoria Chen" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0">Victoria Chen</h6>
                                <span class="text-muted small">San Francisco, CA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-luxury p-4 h-100 d-flex flex-column justify-content-between">
                        <p class="text-muted mb-4">"We booked the Premium Executive Suite for our anniversary. The view of the sea from the balcony was breathtaking, and the champagne lounge amenities were incredible."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/avatar.jpg" alt="Marcus Sterling" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0">Marcus Sterling</h6>
                                <span class="text-muted small">London, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-luxury p-4 h-100 d-flex flex-column justify-content-between">
                        <p class="text-muted mb-4">"Unmatched service! From check-in to valet parking, every team member was incredibly welcoming and warm. The Deluxe Room was super comfortable and clean."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/avatar.jpg" alt="Aria Montgomery" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0">Aria Montgomery</h6>
                                <span class="text-muted small">Munich, Germany</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand text-white fs-3 fw-bold mb-3 d-inline-block" href="index.html">Serene<span>Stay</span></a>
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
                        <li class="mb-2"><a href="#services">Our Services</a></li>
                        <li class="mb-2"><a href="login.html">Member Portal</a></li>
                        <li class="mb-2"><a href="register.html">Loyalty Program</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contacts</h5>
                    <ul class="list-unstyled mt-3 text-white-50">
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-primary me-2"></i> 777 Luxury Boulevard, Las Vegas, NV</li>
                        <li class="mb-2"><i class="fa-solid fa-phone text-primary me-2"></i> +1 (800) 555-000</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope text-primary me-2"></i> reservations@serenestay.com</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom text-center text-white-50">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2026 SereneStay. Designed for Luxury Voyagers. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
