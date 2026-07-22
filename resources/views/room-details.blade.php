@extends("layouts.mainsite")

    @section("hero")
    <!-- Subpage Hero banner -->
    <section class="py-5 text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
        <div class="container py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="rooms.html" class="text-white-50 text-decoration-none">Rooms</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $room->title }}</li>
                </ol>
            </nav>
            <h1 class="text-white mb-0">{{ $room->title }}</h1>
        </div>
    </section>
    @endsection

    @section("content")
    <!-- Room Details Section -->
    <main class="container my-5">
        <div class="row">
            
            <!-- Left Side Content -->
            <div class="col-lg-8 mb-4">
                
                <!-- Main Gallery -->
                <section class="mb-5">
                    <div class="room-gallery-main">
                        <img src="{{ asset('storage/' . $room->image) }}" alt="{{ $room->title }}">
                    </div>
                    
                </section>

                <!-- Room Description and Details -->
                <section class="mb-5">
                    <h3 class="mb-4 text-dark border-bottom pb-2">Description</h3>
                    <p class="text-muted">{{ $room->description }}.</p>
                    
                    
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
                                <img src="/assets/images/avatar.jpg" alt="Guest" class="rounded-circle" style="width: 45px; height: 45px; object-fit: cover;">
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
            <form action="{{ route('booking.create', $room) }}" method="GET" id="booking-widget-form">
    <!-- Dates selection -->
    <div class="mb-3">
        <label for="check_in_details" class="form-label font-weight-bold small text-muted text-uppercase">Check-In</label>
        <input type="date" id="check_in_details" name="check_in" class="form-control" min="{{ now()->toDateString() }}" value="{{ now()->addDay()->toDateString() }}" required>
    </div>
    <div class="mb-3">
        <label for="check_out_details" class="form-label font-weight-bold small text-muted text-uppercase">Check-Out</label>
        <input type="date" id="check_out_details" name="check_out" class="form-control" min="{{ now()->addDays(2)->toDateString() }}" value="{{ now()->addDays(4)->toDateString() }}" required>
    </div>
    <div class="mb-4">
        <label for="guests_details" class="form-label font-weight-bold small text-muted text-uppercase">Guests Count</label>
        <select id="guests_details" name="guests" class="form-select">
            <option value="1">1 Guest</option>
            <option value="2" selected>2 Guests</option>
            <option value="3">3 Guests</option>
        </select>
    </div>

    <!-- Price Breakdown -->
    <h6 class="mb-3 text-dark small text-uppercase fw-bold">Price Calculation</h6>
    <div class="price-item">
        <span id="rate-label">${{ number_format($room->price_per_night, 2) }} / night x <span id="nights-count">2</span> nights</span>
        <strong id="base-price">${{ number_format($room->price_per_night * 2, 2) }}</strong>
    </div>
    <div class="price-item">
        <span>Luxury Service Fee</span>
        <strong id="service-fee">$50.00</strong>
    </div>
    <div class="price-item">
        <span>City Occupancy Tax</span>
        <strong id="tax-amount">${{ number_format($room->price_per_night * 2 * 0.06, 2) }}</strong>
    </div>
    <div class="price-total">
        <span>Total Price</span>
        <span id="total-price">${{ number_format(($room->price_per_night * 2) + 50 + ($room->price_per_night * 2 * 0.06), 2) }}</span>
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
    <script>
    const pricePerNight = {{ $room->price_per_night }};
    const serviceFee = 50;
    const taxRate = 0.06;

    const checkInInput  = document.getElementById('check_in_details');
    const checkOutInput = document.getElementById('check_out_details');

    function recalculatePrice() {
        const checkIn  = new Date(checkInInput.value);
        const checkOut = new Date(checkOutInput.value);
        const nights   = Math.round((checkOut - checkIn) / (1000 * 60 * 60 * 24));

        if (nights <= 0) return;

        const basePrice = pricePerNight * nights;
        const taxAmount = basePrice * taxRate;
        const total     = basePrice + serviceFee + taxAmount;

        document.getElementById('nights-count').textContent = nights;
        document.getElementById('base-price').textContent = '$' + basePrice.toFixed(2);
        document.getElementById('tax-amount').textContent = '$' + taxAmount.toFixed(2);
        document.getElementById('total-price').textContent = '$' + total.toFixed(2);

        // Keep checkout min date one day after checkin
        checkOutInput.min = new Date(checkIn.getTime() + 86400000).toISOString().split('T')[0];
    }

    checkInInput.addEventListener('change', recalculatePrice);
    checkOutInput.addEventListener('change', recalculatePrice);
</script>
    @endsection

  
