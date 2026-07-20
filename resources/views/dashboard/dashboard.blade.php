<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard | SERENE STAY</title>
    <meta name="description" content="Manage your bookings, review your loyal rewards, and configure profile parameters.">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="bg-light">

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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.html">Rooms & Suites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#testimonials">Reviews</a>
                    </li>
                </ul>
                <div class="navbar-buttons d-flex align-items-center">
                    <div class="dropdown">
                        <a class="btn btn-outline-light btn-sm dropdown-toggle px-3 py-2 border-0 d-flex align-items-center gap-2" href="#" role="button" id="userMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/images/avatar.jpg" alt="User Avatar" class="rounded-circle" style="width: 28px; height: 28px; object-fit: cover; border: 1.5px solid var(--primary-color);">
                            <span>{{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenuLink">
                            <li><a class="dropdown-item py-2 small" href="dashboard.html"><i class="fa-solid fa-chart-line me-2 text-muted"></i> Dashboard</a></li>
                            <li><a class="dropdown-item py-2 small" href="#"><i class="fa-solid fa-user me-2 text-muted"></i> My Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="m-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item py-2 small text-danger border-0 bg-transparent">
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
                            <img src="/assets/images/avatar.jpg" alt="John Doe" class="user-avatar">
                            <h5 class="user-name mb-1">{{ auth()->user()->name }}</h5>
                            <span class="user-email">{{ auth()->user()->email }}</span>
                            <span class="badge bg-warning text-dark mt-2 px-3 py-1 font-monospace small"><i class="fa-solid fa-crown me-1"></i>GOLD VIP</span>
                        </div>

                        <!-- Sidebar Navigation Tabs Trigger -->
                        <div class="nav flex-column nav-pills dashboard-menu" id="dashboard-tabs" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active text-start border-0 bg-transparent" id="tab-overview-btn" data-bs-toggle="pill" data-bs-target="#tab-overview" type="button" role="tab" aria-controls="tab-overview" aria-selected="true">
                                <i class="fa-solid fa-house-chimney"></i> Overview
                            </button>
                            <button class="nav-link text-start border-0 bg-transparent" id="tab-bookings-btn" data-bs-toggle="pill" data-bs-target="#tab-bookings" type="button" role="tab" aria-controls="tab-bookings" aria-selected="false">
                                <i class="fa-solid fa-calendar-check"></i> My Bookings
                            </button>
                            <button class="nav-link text-start border-0 bg-transparent" id="tab-profile-btn" data-bs-toggle="pill" data-bs-target="#tab-profile" type="button" role="tab" aria-controls="tab-profile" aria-selected="false">
                                <i class="fa-solid fa-user-gear"></i> Profile Settings
                            </button>
                            <button class="nav-link text-start border-0 bg-transparent" id="tab-password-btn" data-bs-toggle="pill" data-bs-target="#tab-password" type="button" role="tab" aria-controls="tab-password" aria-selected="false">
                                <i class="fa-solid fa-shield-halved"></i> Change Password
                            </button>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link text-start text-danger border-0 bg-transparent w-100">
                                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Side Tabs Content -->
                <div class="col-lg-9">
                    <div class="tab-content" id="dashboard-tabsContent">
                        
                        <!-- TAB: OVERVIEW -->
                        <div class="tab-pane fade show active" id="tab-overview" role="tabpanel" aria-labelledby="tab-overview-btn">
                            <!-- Welcome -->
                            <div class="card card-luxury p-4 mb-4" style="background: var(--dark-gradient); color: white; border: none;">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h3 class="text-white mb-2">Welcome back,{{ auth()->user()->name }}</h3>
                                        <p class="text-white-50 mb-0 small">You have 1 upcoming reservation this summer. Upgrade to PLATINUM status in 2 more stays.</p>
                                    </div>
                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                        <a href="rooms.html" class="btn btn-luxury btn-sm">Book Another Suite</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat Cards -->
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <div class="stat-card">
                                        <div>
                                            <span class="stat-label">Active Stays</span>
                                            <h4 class="stat-value">1</h4>
                                        </div>
                                        <div class="stat-icon"><i class="fa-solid fa-calendar-days"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-card">
                                        <div>
                                            <span class="stat-label">Total Spent</span>
                                            <h4 class="stat-value">$3,450</h4>
                                        </div>
                                        <div class="stat-icon"><i class="fa-solid fa-receipt"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-card">
                                        <div>
                                            <span class="stat-label">SereneStay Rewards</span>
                                            <h4 class="stat-value">450 <span class="fs-6 text-muted">Pts</span></h4>
                                        </div>
                                        <div class="stat-icon"><i class="fa-solid fa-gem"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upcoming Bookings Alert -->
                            <div class="card card-luxury p-4 mb-4">
                                <h5 class="mb-3 text-dark border-bottom pb-2">Upcoming Reservation</h5>
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="assets/images/suite.jpg" alt="Booking Suite" class="img-fluid rounded-3" style="object-fit: cover; aspect-ratio: 4 / 3;">
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <span class="badge bg-success mb-2 px-2 py-1">CONFIRMED</span>
                                        <h6 class="mb-1 text-dark text-uppercase small font-weight-bold">#SERENES-2026-998822</h6>
                                        <h5 class="text-dark mb-2">Premium Executive Suite</h5>
                                        <p class="text-muted small mb-0"><i class="fa-regular fa-calendar me-2"></i>Jul 20 &mdash; Jul 23, 2026 (3 nights)</p>
                                    </div>
                                    <div class="col-md-3 text-md-end mt-3 mt-md-0 d-grid d-md-block">
                                        <a href="room-details.html" class="btn btn-outline-luxury btn-sm mb-2">View Details</a>
                                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel Booking</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB: MY BOOKINGS -->
                        <div class="tab-pane fade" id="tab-bookings" role="tabpanel" aria-labelledby="tab-bookings-btn">
                            <div class="card card-luxury p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                                    <h4 class="mb-0 text-dark">Reservation History</h4>
                                    <span class="text-muted small">All bookings linked to email</span>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover table-luxury align-middle text-start mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ref ID</th>
                                                <th scope="col">Suite</th>
                                                <th scope="col">Dates</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-monospace fw-bold">#SERENES-998822</td>
                                                <td>Premium Executive Suite</td>
                                                <td>Jul 20 &mdash; Jul 23, 2026</td>
                                                <td>$1,480.00</td>
                                                <td><span class="badge-status confirmed">Confirmed</span></td>
                                                <td class="text-center">
                                                    <a href="room-details.html" class="btn btn-sm btn-outline-luxury py-1 px-3">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-monospace fw-bold">#SERENES-817293</td>
                                                <td>Deluxe Double Room</td>
                                                <td>Mar 11 &mdash; Mar 15, 2026</td>
                                                <td>$1,070.00</td>
                                                <td><span class="badge-status completed">Completed</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-dark py-1 px-3">Invoice</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-monospace fw-bold">#SERENES-712893</td>
                                                <td>Presidential Penthouse</td>
                                                <td>Dec 24 &mdash; Dec 25, 2025</td>
                                                <td>$980.00</td>
                                                <td><span class="badge-status completed">Completed</span></td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-outline-dark py-1 px-3">Invoice</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-monospace fw-bold">#SERENES-602917</td>
                                                <td>Deluxe Twin Room</td>
                                                <td>Oct 05 &mdash; Oct 07, 2025</td>
                                                <td>$460.00</td>
                                                <td><span class="badge-status cancelled">Cancelled</span></td>
                                                <td class="text-center">
                                                    <span class="text-muted small">Refunded</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- TAB: PROFILE SETTINGS -->
                        <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="tab-profile-btn">
                            <div class="card card-luxury p-4">
                                <h4 class="mb-4 border-bottom pb-2 text-dark">Profile Settings</h4>
                                <form action="#" method="POST">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="prof_first" class="form-label text-muted small fw-bold">First Name</label>
                                            <input type="text" id="prof_first" class="form-control" value="John" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prof_last" class="form-label text-muted small fw-bold">Last Name</label>
                                            <input type="text" id="prof_last" class="form-control" value="Doe" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prof_email" class="form-label text-muted small fw-bold">Email Address</label>
                                            <input type="email" id="prof_email" class="form-control" value="john.doe@example.com" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prof_phone" class="form-label text-muted small fw-bold">Phone Number</label>
                                            <input type="tel" id="prof_phone" class="form-control" value="+1 (555) 019-2834" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pref_diet" class="form-label text-muted small fw-bold">Dietary Choice</label>
                                            <select id="pref_diet" class="form-select">
                                                <option selected>Standard Cuisine</option>
                                                <option>Vegan</option>
                                                <option>Gluten-Free</option>
                                                <option>Halal</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pref_bed" class="form-label text-muted small fw-bold">Bed Preferences</label>
                                            <select id="pref_bed" class="form-select">
                                                <option selected>Soft Feather Pillows</option>
                                                <option>Orthopedic Mattresses</option>
                                                <option>Hypoallergenic Linens</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-luxury px-5 py-3"><i class="fa-solid fa-floppy-disk me-2"></i>Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- TAB: PASSWORD SETTINGS -->
                        <div class="tab-pane fade" id="tab-password" role="tabpanel" aria-labelledby="tab-password-btn">
                            <div class="card card-luxury p-4">
                                <h4 class="mb-4 border-bottom pb-2 text-dark">Security Details</h4>
                                <form action="#" method="POST">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="pass_current" class="form-label text-muted small fw-bold">Current Password</label>
                                            <input type="password" id="pass_current" class="form-control" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pass_new" class="form-label text-muted small fw-bold">New Password</label>
                                            <input type="password" id="pass_new" class="form-control" placeholder="Minimum 8 characters" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pass_confirm" class="form-label text-muted small fw-bold">Confirm New Password</label>
                                            <input type="password" id="pass_confirm" class="form-control" placeholder="Match new password" required>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-luxury px-5 py-3"><i class="fa-solid fa-key me-2"></i>Update Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Cancellation Confirmation Modal (Bootstrap 5 Modal) -->
    <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden;">
                <div class="modal-header bg-danger text-white border-0 py-3">
                    <h5 class="modal-title" id="cancelModalLabel"><i class="fa-solid fa-circle-exclamation me-2"></i>Cancel Reservation</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-start">
                    <p class="mb-3 text-dark">Are you absolutely sure you wish to cancel your booking for the <strong>Premium Executive Suite</strong> (#SERENES-2026-998822)?</p>
                    <div class="alert alert-warning border-0 rounded-3 small py-3 mb-0">
                        <i class="fa-solid fa-circle-info text-warning me-1"></i> Since you are within the cancellation period (before July 18), a full refund of <strong>$1,480.00</strong> will be credited to your Visa ending in 4444.
                    </div>
                </div>
                <div class="modal-footer border-0 bg-light p-3">
                    <button type="button" class="btn btn-secondary px-4 py-2 border-0 bg-transparent text-muted small" data-bs-dismiss="modal">Keep Booking</button>
                    <form action="dashboard.html" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-danger px-4 py-2">Confirm Cancellation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand text-white fs-3 fw-bold mb-3 d-inline-block" href="index.html">SERENE<span>STAY</span></a>
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
                        <li class="mb-2"><i class="fa-solid fa-phone text-primary me-2"></i> +1 (800) 555-SERENES</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope text-primary me-2"></i> reservations@serenestay.com</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom text-center text-white-50">
                <div class="col-md-12">
                    <p class="mb-0">&copy; 2026 SERENE STAY. Designed for Luxury Voyagers. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
