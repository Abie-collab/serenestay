@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<!-- Welcome Card -->
<div class="card card-luxury p-4 mb-4" style="background: var(--dark-gradient); color: white; border: none;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h3 class="text-white mb-2">Welcome back, {{ Auth::user()->name }}!</h3>
            <p class="text-white-50 mb-0 small">You have full administrative access to manage rooms, categories, and reservations.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.rooms.create') }}" class="btn btn-luxury btn-sm">
                <i class="fa-solid fa-plus me-2"></i>Add New Room
            </a>
        </div>
    </div>
</div>

<!-- Stat Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <span class="stat-label">Total Rooms</span>
                <h4 class="stat-value">{{ $stats['total_rooms'] }}</h4>
            </div>
            <div class="stat-icon"><i class="fa-solid fa-hotel"></i></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <span class="stat-label">Available</span>
                <h4 class="stat-value">{{ $stats['available_rooms'] }}</h4>
            </div>
            <div class="stat-icon"><i class="fa-solid fa-check-circle"></i></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <span class="stat-label">Booked</span>
                <h4 class="stat-value">{{ $stats['booked_rooms'] }}</h4>
            </div>
            <div class="stat-icon"><i class="fa-solid fa-calendar-check"></i></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <span class="stat-label">Categories</span>
                <h4 class="stat-value">{{ $stats['total_categories'] }}</h4>
            </div>
            <div class="stat-icon"><i class="fa-solid fa-tags"></i></div>
        </div>
    </div>
</div>

<!-- Quick Actions & Recent Activity -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="card card-luxury p-4">
            <h5 class="mb-3 text-dark border-bottom pb-2">Quick Actions</h5>
            <div class="d-grid gap-2">
                <a href="{{ route('admin.rooms.create') }}" class="btn btn-luxury">
                    <i class="fa-solid fa-plus-circle me-2"></i>Add New Room
                </a>
                <a href="{{ route('admin.categories') }}" class="btn btn-outline-luxury">
                    <i class="fa-solid fa-tags me-2"></i>Manage Categories
                </a>
                <a href="{{ route('admin.rooms') }}" class="btn btn-outline-luxury">
                    <i class="fa-solid fa-list me-2"></i>View All Rooms
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card card-luxury p-4">
            <h5 class="mb-3 text-dark border-bottom pb-2">System Status</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted small">Total Rooms</span>
                <span class="fw-bold">{{ $stats['total_rooms'] }}</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted small">Available Rooms</span>
                <span class="fw-bold text-success">{{ $stats['available_rooms'] }}</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted small">Booked Rooms</span>
                <span class="fw-bold text-warning">{{ $stats['booked_rooms'] }}</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-muted small">Occupancy Rate</span>
                <span class="fw-bold">
                    @php
                        $occupancy = $stats['total_rooms'] > 0 ? round(($stats['booked_rooms'] / $stats['total_rooms']) * 100) : 0;
                    @endphp
                    {{ $occupancy }}%
                </span>
            </div>
            <div class="progress mt-2" style="height: 6px;">
                <div class="progress-bar bg-warning" style="width: {{ $occupancy }}%;" role="progressbar"></div>
            </div>
        </div>
    </div>
</div>
@endsection