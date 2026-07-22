@extends("layouts.mainsite")

    @section("hero")
    <!-- Subpage Hero banner -->
    <section class="py-5 text-center text-white" style="background: var(--dark-gradient); padding-top: 8rem !important; border-bottom: 3px solid var(--primary-color);">
        <div class="container py-4">
            <h1 class="text-white mb-2">Our Suites & Rooms</h1>
            <p class="lead mb-0 text-white-50">Discover pure comfort combined with exquisite design.</p>
        </div>
    </section>
    @endsection

    @section("content")
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
                    <form action="{{ route('rooms.index') }}" method="GET">
                    <h5 class="mb-4 pb-2 border-bottom text-dark d-flex align-items-center justify-content-between">
                        <span>Filters</span>
                        <a href="{{ route('rooms.index') }}" class="small text-muted text-decoration-none fw-normal"><i class="fa-solid fa-rotate-left me-1"></i>Reset</a>
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
                        @foreach ($categories as $category)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="category[]"
                                    id="cat{{ $category->id }}" value="{{ $category->id }}"
                                    {{ in_array($category->id, request('category', [])) ? 'checked' : '' }}>
                                <label class="form-check-label text-muted small" for="cat{{ $category->id }}">{{ $category->name }}</label>
                            </div>
                        @endforeach
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

                    <button type="submit" class="btn btn-luxury w-100 mt-2">Apply Filters</button>
                </div>
            </div>

            <!-- Rooms Grid -->
            <div class="col-lg-9 col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span class="text-muted">Showing <strong>{{ $rooms->total() }}</strong> luxury suites matches</span>
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
                   <div class="row g-4">
                    @forelse ($rooms as $room)
                    <div class="col-lg-6 col-12">
                        <div class="card card-luxury h-100">
                            <div class="card-img-wrapper">
                                <img src="{{ asset('storage/' . $room->image) }}" alt="{{ $room->title }}">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted small text-uppercase">{{ $room->category->name }}</span>
                                        <span class="room-price">${{ number_format($room->price_per_night, 0) }} <span>/ night</span></span>
                                    </div>
                                    <h4 class="card-title text-dark">{{ $room->title }}</h4>
                                    <p class="text-muted small mb-3">{{ $room->short_description }}</p>
                                </div>
                                <div class="d-grid mt-auto">
                                    <a href="{{ route('rooms.show', $room) }}" class="btn btn-luxury">Details & Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-muted text-center py-5">No suites match your filters right now.</p>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <nav class="mt-5" aria-label="Room listing navigation">
                    {{ $rooms->links() }}
                </nav>
            </div>
        </div>
    </main>
    @endsection

 
