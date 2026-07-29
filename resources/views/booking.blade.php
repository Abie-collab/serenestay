@extends("layouts.mainsite")

    @section("hero")
    <!-- Subpage Hero banner -->
    <section class="py-5 text-center text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
        <div class="container py-3">
            <h1 class="text-white mb-0">Secure Checkout</h1>
            <p class="text-white-50 small mb-0">Please fill out the guest details below to finalize your booking reservation.</p>
        </div>
    </section>
    @endsection

    @section("content")
    <!-- Checkout Main Section -->
    <main class="container my-5">
        <div class="row">
            
            <!-- Left Side Forms -->
            <div class="col-lg-8">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <input type="hidden" name="check_in" value="{{ $checkIn }}">
                    <input type="hidden" name="check_out" value="{{ $checkOut }}">
                    <input type="hidden" name="guests_count" value="{{ $guests }}">
                    <input type="hidden" name="nights" value="{{ $nights }}">
                    <input type="hidden" name="base_price" value="{{ $basePrice }}">
                    <input type="hidden" name="service_fee" value="{{ $serviceFee }}">
                    <input type="hidden" name="tax_amount" value="{{ $taxAmount }}">
                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                    
                    <!-- Guest Details Card -->
                    <div class="card card-luxury p-4 mb-4">
                        <h4 class="mb-4 text-dark"><span class="badge bg-dark me-2">1</span> Guest Information</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label text-muted small fw-bold">First Name</label>
                               <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', explode(' ', auth()->user()->name)[0]) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label text-muted small fw-bold">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', explode(' ', auth()->user()->name)[1] ?? '') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label text-muted small fw-bold">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
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
                        <img src="{{ asset('storage/' . $room->image) }}" alt="{{ $room->title }}" class="rounded-3" style="width: 80px; height: 60px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1 text-dark">{{ $room->title }}</h6>
                            <span class="text-muted small"><i class="fa-solid fa-star text-warning me-1"></i> 4.9 Rating</span>
                        </div>
                    </div>

                    <!-- Details overview -->
                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                        <span class="text-muted small">Check-In</span>
                        <strong class="small text-dark">{{ \Carbon\Carbon::parse($checkIn)->format('M d, Y') }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-2 border-bottom">
                        <span class="text-muted small">Check-Out</span>
                       <strong class="small text-dark">{{ \Carbon\Carbon::parse($checkOut)->format('M d, Y') }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-2 border-bottom">
                        <span class="text-muted small">Total Nights</span>
                        <strong class="small text-dark">{{ $nights }} {{ Str::plural('Night', $nights) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-4 pb-2 border-bottom">
                        <span class="text-muted small">Occupants</span>
                       <strong class="small text-dark">{{ $guests }} {{ Str::plural('Guest', $guests) }}</strong>
                    </div>

                    <!-- Price breakdown -->
                    <h6 class="mb-3 text-dark small text-uppercase fw-bold">Charges Summary</h6>
                    <div class="price-item">
                        <span>${{ number_format($room->price_per_night, 2) }} / night x {{ $nights }} {{ Str::plural('night', $nights) }}</span>
                        <strong>${{ number_format($basePrice, 2) }}</strong>
                </div>
                   <div class="price-item">
                        <span>Luxury Service Fee</span>
                        <strong>${{ number_format($serviceFee, 2) }}</strong>
                    </div>

                    <div class="price-item">
                        <span>City Occupancy Tax</span>
                        <strong>${{ number_format($taxAmount, 2) }}</strong>
                    </div>
                    
                    <div class="price-total">
                        <span>Total To Pay</span>
                        <span>${{ number_format($totalPrice, 2) }}</span>
                    </div>

                    <!-- Free cancellation alert -->
                    <!-- <div class="alert alert-success border-0 rounded-3 mt-4 mb-0 py-3 small d-flex align-items-center gap-2">
                        <i class="fa-regular fa-calendar-check text-success fs-5"></i>
                        <div>
                            <strong>Free Cancellation</strong><br>
                            Before July 18, 2026. Refund policy applies.
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </main>
    @endsection


