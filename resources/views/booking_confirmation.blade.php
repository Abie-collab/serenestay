@extends("layouts.mainsite")

@section("hero")
<!-- Subpage Hero banner -->
<section class="py-5 text-center text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
    <div class="container py-3">
        <h1 class="text-white mb-0"><i class="fa-solid fa-circle-check text-success me-2"></i>Booking Confirmed</h1>
        <p class="text-white-50 small mb-0">Thank you, your reservation has been successfully placed.</p>
    </div>
</section>
@endsection

@section("content")
<!-- Confirmation Main Section -->
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card-luxury p-4 p-md-5 mb-4">

                <div class="text-center mb-4 pb-4 border-bottom">
                    <i class="fa-solid fa-circle-check text-success mb-3" style="font-size: 3rem;"></i>
                    <h3 class="text-dark mb-1">Reservation Successful</h3>
                    <p class="text-muted small mb-0">A confirmation has been sent to <strong>{{ $booking->email }}</strong></p>
                </div>

                <!-- Booking Reference -->
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <span class="text-muted small text-uppercase fw-bold">Booking Reference</span>
                    <strong class="text-dark">{{ $booking->booking_reference }}</strong>
                </div>

                <!-- Room Info -->
                <div class="d-flex align-items-center gap-3 mb-4 pb-4 border-bottom">
                    @if($booking->room && $booking->room->image)
                        <img src="{{ asset('storage/' . $booking->room->image) }}" alt="{{ $booking->room->title }}" class="rounded-3" style="width: 90px; height: 70px; object-fit: cover;">
                    @endif
                    <div>
                        <h6 class="mb-1 text-dark">{{ $booking->room->title ?? 'Room' }}</h6>
                        <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : 'secondary' }} text-uppercase">{{ $booking->status }}</span>
                    </div>
                </div>

                <!-- Stay Details -->
                <h6 class="mb-3 text-dark small text-uppercase fw-bold">Stay Details</h6>
                <div class="row g-3 mb-4 pb-4 border-bottom">
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Check-In</span>
                        <strong class="text-dark">{{ \Carbon\Carbon::parse($booking->check_in)->format('M d, Y') }}</strong>
                    </div>
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Check-Out</span>
                        <strong class="text-dark">{{ \Carbon\Carbon::parse($booking->check_out)->format('M d, Y') }}</strong>
                    </div>
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Total Nights</span>
                        <strong class="text-dark">{{ $booking->nights }} {{ Str::plural('Night', $booking->nights) }}</strong>
                    </div>
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Occupants</span>
                        <strong class="text-dark">{{ $booking->guests_count }} {{ Str::plural('Guest', $booking->guests_count) }}</strong>
                    </div>
                </div>

                <!-- Guest Details -->
                <h6 class="mb-3 text-dark small text-uppercase fw-bold">Guest Information</h6>
                <div class="row g-3 mb-4 pb-4 border-bottom">
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Name</span>
                        <strong class="text-dark">{{ $booking->first_name }} {{ $booking->last_name }}</strong>
                    </div>
                    <div class="col-md-6">
                        <span class="text-muted small d-block">Phone</span>
                        <strong class="text-dark">{{ $booking->phone }}</strong>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <h6 class="mb-3 text-dark small text-uppercase fw-bold">Charges Summary</h6>
                <div class="price-item">
                    <span>Base Price</span>
                    <strong>${{ number_format($booking->base_price, 2) }}</strong>
                </div>
                <div class="price-item">
                    <span>Luxury Service Fee</span>
                    <strong>${{ number_format($booking->service_fee, 2) }}</strong>
                </div>
                <div class="price-item">
                    <span>City Occupancy Tax</span>
                    <strong>${{ number_format($booking->tax_amount, 2) }}</strong>
                </div>
                <div class="price-total">
                    <span>Total Paid</span>
                    <span>${{ number_format($booking->total_price, 2) }}</span>
                </div>

                <!-- Actions -->
                <div class="d-flex flex-column flex-md-row gap-3 mt-4 pt-4 border-top">
                    <a href="{{ route('dashboard') }}" class="btn btn-luxury flex-fill py-2 text-center">
                        <i class="fa-solid fa-gauge me-2"></i>Go to Dashboard
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-outline-dark flex-fill py-2 text-center">
                        <i class="fa-solid fa-house me-2"></i>Back to Home
                    </a>
                </div>

            </div>

        </div>
    </div>
</main>
@endsection