<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Checkout | AURA Resort</title>
    <meta name="description" content="Securely complete your reservation at AURA Resort. Enter guest details and payment details.">
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
        <div class="container py-3">
            <h1 class="text-white mb-0">Secure Checkout</h1>
            <p class="text-white-50 small mb-0">Please fill out the guest details below to finalize your booking reservation.</p>
        </div>
    </section>

    <!-- Checkout Main Section -->
    <main class="container my-5">
        <div class="row">
            
            <!-- Left Side Forms -->
            <div class="col-lg-8">
                <form action="confirmation.html" method="GET">
                    
                    <!-- Guest Details Card -->
                    <div class="card card-luxury p-4 mb-4">
                        <h4 class="mb-4 text-dark"><span class="badge bg-dark me-2">1</span> Guest Information</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label text-muted small fw-bold">First Name</label>
                                <input type="text" id="first_name" class="form-control" placeholder="John" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label text-muted small fw-bold">Last Name</label>
                                <input type="text" id="last_name" class="form-control" placeholder="Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" id="email" class="form-control" placeholder="john.doe@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label text-muted small fw-bold">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" placeholder="+1 (555) 019-2834" required>
                            </div>
                        </div>
                    </div>

                    <!-- Special Requests Card -->
                    <div class="card card-luxury p-4 mb-4">
                        <h4 class="mb-4 text-dark"><span class="badge bg-dark me-2">2</span> Special Requests (Optional)</h4>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="requests" class="form-label text-muted small fw-bold">Add Requests</label>
                                <textarea id="requests" class="form-control" rows="3" placeholder="Dietary restrictions, pillow preferences, early check-in, etc. We will try our best to accommodate."></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="shuttle">
                                    <label class="form-check-label text-muted small" for="shuttle">
                                        Request Private Airport Shuttle Transfer
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter">
                                    <label class="form-check-label text-muted small" for="newsletter">
                                        Subscribe to VIP discount announcements
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information Card -->
                    <div class="card card-luxury p-4 mb-4">
                        <h4 class="mb-4 text-dark"><span class="badge bg-dark me-2">3</span> Payment Details</h4>
                        <div class="alert alert-info border-0 rounded-3 small py-3 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-lock text-info"></i>
                            <span>Secure SSL Encrypted Checkout. Your details are never saved in clear text.</span>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="card_name" class="form-label text-muted small fw-bold">Name on Card</label>
                                <input type="text" id="card_name" class="form-control" placeholder="JOHN DOE" required>
                            </div>
                            <div class="col-md-6">
                                <label for="card_number" class="form-label text-muted small fw-bold">Card Number</label>
                                <div class="input-group">
                                    <input type="text" id="card_number" class="form-control" placeholder="4111 2222 3333 4444" required>
                                    <span class="input-group-text bg-white text-muted border-start-0"><i class="fa-brands fa-cc-visa"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="expiry" class="form-label text-muted small fw-bold">Expiry Date</label>
                                <input type="text" id="expiry" class="form-control" placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-3">
                                <label for="cvv" class="form-label text-muted small fw-bold">CVV/CVC</label>
                                <input type="text" id="cvv" class="form-control" placeholder="123" required>
                            </div>
                        </div>
                    </div>

                    <!-- Terms checkbox & Submit -->
                    <div class="mb-4">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label text-muted small" for="terms">
                                I agree to the <a href="#" class="text-primary text-decoration-none">Terms and Conditions</a>, privacy policy, and booking cancellation rules.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-luxury btn-lg w-100 py-3"><i class="fa-solid fa-square-check me-2"></i>Complete Reservation</button>
                    </div>

                </form>
            </div>

            <!-- Right Side Booking Summary Widget -->
            <div class="col-lg-4">
                <div class="card-luxury p-4 sticky-summary">
                    <h4 class="mb-3 text-dark">Reservation Details</h4>
                    <hr>
                    
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="assets/images/suite.jpg" alt="Room Thumbnail" class="rounded-3" style="width: 80px; height: 60px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1 text-dark">Premium Executive Suite</h6>
                            <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 Rating</span>
                        </div>
                    </div>

                    <!-- Details overview -->
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                        <span class="text-muted small">Check-In</span>
                        <strong class="small text-dark">Jul 20, 2026 (3:00 PM)</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-2 border-bottom">
                        <span class="text-muted small">Check-Out</span>
                        <strong class="small text-dark">Jul 23, 2026 (11:00 AM)</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-2 border-bottom">
                        <span class="text-muted small">Total Nights</span>
                        <strong class="small text-dark">3 Nights</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-4 pb-2 border-bottom">
                        <span class="text-muted small">Occupants</span>
                        <strong class="small text-dark">2 Guests</strong>
                    </div>

                    <!-- Price breakdown -->
                    <h6 class="mb-3 text-dark small text-uppercase fw-bold">Charges Summary</h6>
                    <div class="price-item">
                        <span>Suite Nights Base Rate</span>
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
                        <span>Total To Pay</span>
                        <span>$1,480.00</span>
                    </div>

                    <!-- Free cancellation alert -->
                    <div class="alert alert-success border-0 rounded-3 mt-4 mb-0 py-3 small d-flex align-items-center gap-2">
                        <i class="fa-regular fa-calendar-check text-success fs-5"></i>
                        <div>
                            <strong>Free Cancellation</strong><br>
                            Before July 18, 2026. Refund policy applies.
                        </div>
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
