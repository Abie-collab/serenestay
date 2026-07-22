@extends('layouts.admin')

@section('title', 'Room Details')

@section('content')
<div class="card card-luxury p-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="mb-0 text-dark"><i class="fa-solid fa-hotel me-2"></i>{{ $room->title }}</h4>
        <div>
            <a href="{{ route('admin.rooms.edit', $room) }}" class="btn btn-luxury btn-sm">
                <i class="fa-solid fa-edit me-2"></i>Edit
            </a>
            <a href="{{ route('admin.rooms') }}" class="btn btn-outline-dark btn-sm ms-1">
                <i class="fa-solid fa-arrow-left me-2"></i>Back to Rooms
            </a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-5">
            @if($room->image)
                <img src="{{ Storage::url($room->image) }}" alt="{{ $room->title }}" class="rounded w-100" style="height: 300px; object-fit: cover;">
            @else
                <div class="bg-light rounded d-flex align-items-center justify-content-center w-100" style="height: 300px;">
                    <i class="fa-solid fa-hotel fa-3x text-muted"></i>
                </div>
            @endif
        </div>

        <div class="col-md-7">
            <table class="table table-borderless mb-0">
                <tbody>
                    <tr>
                        <th class="text-muted small fw-bold" style="width: 180px;">Category</th>
                        <td>{{ $room->category->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th class="text-muted small fw-bold">Price per Night</th>
                        <td>${{ number_format($room->price_per_night, 2) }}</td>
                    </tr>
                    <tr>
                        <th class="text-muted small fw-bold">Status</th>
                        <td>
                            <span class="badge-status 
                                @if($room->status === 'available') confirmed
                                @elseif($room->status === 'booked') completed
                                @else cancelled
                                @endif">
                                {{ ucfirst($room->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-muted small fw-bold">Slug</th>
                        <td><code>{{ $room->slug }}</code></td>
                    </tr>
                    @if($room->short_description)
                    <tr>
                        <th class="text-muted small fw-bold">Short Description</th>
                        <td>{{ $room->short_description }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th class="text-muted small fw-bold">Created</th>
                        <td>{{ $room->created_at->format('M d, Y') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        @if($room->description)
        <div class="col-12">
            <hr>
            <h6 class="text-muted small fw-bold mb-2">Description</h6>
            <p class="mb-0">{{ $room->description }}</p>
        </div>
        @endif
    </div>

    <div class="mt-4 pt-3 border-top d-flex">
        <form action="{{ route('admin.rooms.delete', $room) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this room?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="fa-solid fa-trash me-2"></i>Delete Room
            </button>
        </form>
    </div>
</div>
@endsection
