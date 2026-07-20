<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Suites | AURA Resort</title>
    <meta name="description" content="Explore AURA Resort's handpicked collection of deluxe rooms and luxury suites. Filter and book your perfect stay.">
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
    <section class="py-5 text-center text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
        <div class="container py-4">
            <h1 class="text-white mb-2">Our Suites & Rooms</h1>
            <p class="lead mb-0 text-white-50">Discover pure comfort combined with exquisite design.</p>
        </div>
    </section>

    <!-- Main Listing Layout -->
    <main class="container my-5">
        
        <!-- Alerts & Counters -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-warning alert-dismissible fade show border-0 rounded-3 shadow-sm d-flex align-items-center gap-3 bg-white text-dark py-3" role="alert">
                    <span class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;"><i class="fa-solid fa-bell"></i></span>
                    <div>
                        <strong>Limited availability!</strong> Summer bookings are closing fast. Log in to claim your 15% Member Discount.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="filter-sidebar">
                    <h5 class="mb-4 pb-2 border-bottom text-dark d-flex align-items-center justify-content-between">
                        <span>Filters</span>
                        <a href="rooms.html" class="small text-muted text-decoration-none fw-normal"><i class="fa-solid fa-rotate-left me-1"></i>Reset</a>
                    </h5>
                    
                    <!-- Search input -->
                    <div class="filter-group">
                        <label class="filter-group-title" for="search_query">Search</label>
                        <div class="input-group">
                            <input type="text" id="search_query" class="form-control form-control-sm" placeholder="Room title...">
                            <button class="btn btn-luxury btn-sm" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="filter-group">
                        <span class="filter-group-title">Price Range</span>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="price1" value="0-250">
                            <label class="form-check-label text-muted small" for="price1">Under $250 / night</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="price2" value="250-500" checked>
                            <label class="form-check-label text-muted small" for="price2">$250 - $500 / night</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="price3" value="500-1000" checked>
                            <label class="form-check-label text-muted small" for="price3">$500 - $1,000 / night</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="price4" value="1000+">
                            <label class="form-check-label text-muted small" for="price4">Over $1,000 / night</label>
                        </div>
                    </div>

                    <!-- Room Type Filter -->
                    <div class="filter-group">
                        <span class="filter-group-title">Suite Category</span>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat1" value="deluxe" checked>
                            <label class="form-check-label text-muted small" for="cat1">Deluxe Rooms</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat2" value="suite" checked>
                            <label class="form-check-label text-muted small" for="cat2">Premium Suites</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat3" value="penthouse" checked>
                            <label class="form-check-label text-muted small" for="cat3">Presidential Penthouses</label>
                        </div>
                    </div>

                    <!-- Amenities Filter -->
                    <div class="filter-group">
                        <span class="filter-group-title">Amenities</span>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="am1" value="wifi" checked>
                            <label class="form-check-label text-muted small" for="am1">Free Wi-Fi</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="am2" value="ac" checked>
                            <label class="form-check-label text-muted small" for="am2">Air Conditioning</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="am3" value="pool">
                            <label class="form-check-label text-muted small" for="am3">Private Pool</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="am4" value="spa">
                            <label class="form-check-label text-muted small" for="am4">Spa Access</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="am5" value="butler">
                            <label class="form-check-label text-muted small" for="am5">Personal Butler</label>
                        </div>
                    </div>

                    <!-- Ratings -->
                    <div class="filter-group">
                        <span class="filter-group-title">Guest Rating</span>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="rate5" checked>
                            <label class="form-check-label text-muted small" for="rate5">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i> (5/5)
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="rate4" checked>
                            <label class="form-check-label text-muted small" for="rate4">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i> (4/5 & up)
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-luxury w-100 mt-2">Apply Filters</button>
                </div>
            </div>

            <!-- Rooms Grid -->
            <div class="col-lg-9 col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span class="text-muted">Showing <strong>5</strong> luxury suites matches</span>
                    <div class="d-flex align-items-center gap-2">
                        <span class="small text-muted text-nowrap">Sort By:</span>
                        <select class="form-select form-select-sm" style="width: auto;">
                            <option value="featured">Featured First</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="rating">Guest Rating</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Room 1 -->
                    <div class="col-lg-6 col-12">
                        <div class="card card-luxury h-100">
                            <div class="card-img-wrapper">
                                <span class="badge-luxury">Trending</span>
                                <img src="assets/images/deluxe.jpg" alt="Deluxe Room">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.8 (120 reviews)</span>
                                        <span class="room-price">$250 <span>/ night</span></span>
                                    </div>
                                    <h4 class="card-title text-dark">Deluxe Double Room</h4>
                                    <p class="text-muted small mb-3">Spacious bedroom featuring marble bath design, deep relaxation bedding, and skyline sunrise view.</p>
                                    <div class="room-amenities-icons mb-4">
                                        <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                        <span><i class="fa-solid fa-tv"></i> TV</span>
                                        <span><i class="fa-solid fa-snowflake"></i> AC</span>
                                        <span><i class="fa-solid fa-mug-saucer"></i> Tea</span>
                                    </div>
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="room-details.html" class="btn btn-luxury">Details & Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room 2 -->
                    <div class="col-lg-6 col-12">
                        <div class="card card-luxury h-100">
                            <div class="card-img-wrapper">
                                <span class="badge-luxury">Offers</span>
                                <img src="assets/images/deluxe.jpg" alt="Deluxe Room 2">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.7 (95 reviews)</span>
                                        <span class="room-price">$230 <span>/ night</span></span>
                                    </div>
                                    <h4 class="card-title text-dark">Deluxe Twin Bed Room</h4>
                                    <p class="text-muted small mb-3">Perfect configuration for pairs, high-end private balcony viewing the lush gardens, and executive minibar.</p>
                                    <div class="room-amenities-icons mb-4">
                                        <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                        <span><i class="fa-solid fa-tv"></i> TV</span>
                                        <span><i class="fa-solid fa-snowflake"></i> AC</span>
                                        <span><i class="fa-solid fa-table-left"></i> Desk</span>
                                    </div>
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="room-details.html" class="btn btn-luxury">Details & Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room 3 -->
                    <div class="col-lg-6 col-12">
                        <div class="card card-luxury h-100">
                            <div class="card-img-wrapper">
                                <span class="badge-luxury">Popular</span>
                                <img src="assets/images/suite.jpg" alt="Premium Executive Suite">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 (84 reviews)</span>
                                        <span class="room-price">$450 <span>/ night</span></span>
                                    </div>
                                    <h4 class="card-title text-dark">Premium Executive Suite</h4>
                                    <p class="text-muted small mb-3">Indulge in spacious separation of living areas and private master bedroom. Ocean sights and private workspace.</p>
                                    <div class="room-amenities-icons mb-4">
                                        <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                        <span><i class="fa-solid fa-hot-tub-person"></i> Spa</span>
                                        <span><i class="fa-solid fa-couch"></i> Lounge</span>
                                        <span><i class="fa-solid fa-glass-water"></i> Minibar</span>
                                    </div>
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="room-details.html" class="btn btn-luxury">Details & Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room 4 -->
                    <div class="col-lg-6 col-12">
                        <div class="card card-luxury h-100">
                            <div class="card-img-wrapper">
                                <span class="badge-luxury">Bestseller</span>
                                <img src="assets/images/suite.jpg" alt="Honeymoon suite">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 (51 reviews)</span>
                                        <span class="room-price">$420 <span>/ night</span></span>
                                    </div>
                                    <h4 class="card-title text-dark">Honeymoon Luxury Suite</h4>
                                    <p class="text-muted small mb-3">Enchanting view, private hot tub, and champagne service on-arrival. Tailor-made for romance and luxury.</p>
                                    <div class="room-amenities-icons mb-4">
                                        <span><i class="fa-solid fa-wifi"></i> WiFi</span>
                                        <span><i class="fa-solid fa-bath"></i> Hot Tub</span>
                                        <span><i class="fa-solid fa-wine-glass"></i> Wine</span>
                                        <span><i class="fa-solid fa-snowflake"></i> AC</span>
                                    </div>
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="room-details.html" class="btn btn-luxury">Details & Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room 5 -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-luxury">
                            <div class="row g-0">
                                <div class="col-md-5 card-img-wrapper" style="aspect-ratio: auto;">
                                    <span class="badge-luxury">Exclusive</span>
                                    <img src="assets/images/penthouse.jpg" alt="Presidential Penthouse" class="h-100 w-100" style="object-fit: cover;">
                                </div>
                                <div class="col-md-7 d-flex flex-column justify-content-between">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <div>
                                                <h4 class="card-title text-dark mb-1">Presidential Penthouse Suite</h4>
                                                <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 5.0 (32 reviews)</span>
                                            </div>
                                            <span class="room-price text-end">$950 <span class="d-block">/ night</span></span>
                                        </div>
                                        <p class="text-muted small mb-3">The ultimate luxury living space. Set atop the tower, this penthouse offers a massive balcony terrace with a private heated pool, fireplace, 24/7 personal butler service, and private elevator entry.</p>
                                        <div class="room-amenities-icons mb-4">
                                            <span><i class="fa-solid fa-water-ladder"></i> Pool</span>
                                            <span><i class="fa-solid fa-user-tie"></i> Butler</span>
                                            <span><i class="fa-solid fa-fire"></i> Fireplace</span>
                                            <span><i class="fa-solid fa-key"></i> Keycard</span>
                                            <span><i class="fa-solid fa-shield-halved"></i> Security</span>
                                        </div>
                                        <div class="d-grid">
                                            <a href="room-details.html" class="btn btn-luxury">Book The Penthouse</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="mt-5" aria-label="Room listing navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link text-muted border-0 bg-transparent" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link text-white mx-1 rounded-3 px-3 py-2" style="background: var(--primary-color); border:none;" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark mx-1 bg-white border-0 rounded-3 px-3 py-2" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark mx-1 bg-white border-0 rounded-3 px-3 py-2" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link text-dark border-0 bg-transparent" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
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
