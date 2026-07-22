@extends('layouts.admin')

@section('title', 'Manage Rooms')

@section('content')
<div class="card card-luxury p-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="mb-0 text-dark"><i class="fa-solid fa-hotel me-2"></i>Room Management</h4>
        <a href="{{ route('admin.rooms.create') }}" class="btn btn-luxury btn-sm">
            <i class="fa-solid fa-plus me-2"></i>Add Room
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-luxury align-middle text-start mb-0">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rooms as $room)
                <tr>
                    <td>
                        @if($room->image)
                            <img src="{{ Storage::url($room->image) }}" alt="{{ $room->title }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-hotel text-muted"></i>
                            </div>
                        @endif
                    </td>
                    <td class="fw-bold">{{ $room->title }}</td>
                    <td>{{ $room->category->name ?? 'N/A' }}</td>
                    <td>${{ number_format($room->price_per_night, 2) }}</td>
                    <td>
                        <span class="badge-status 
                            @if($room->status === 'available') confirmed
                            @elseif($room->status === 'booked') completed
                            @else cancelled
                            @endif">
                            {{ ucfirst($room->status) }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.rooms.show', $room) }}" class="btn btn-sm btn-outline-secondary py-1 px-3 me-1">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.rooms.edit', $room) }}" class="btn btn-sm btn-outline-luxury py-1 px-3 me-1">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.rooms.delete', $room) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this room?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger py-1 px-3">
                                <i class="fa-solid fa-trash"></i>
        
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">
                        <i class="fa-solid fa-hotel fa-2x d-block mb-2"></i>
                        No rooms found. 
                        <a href="{{ route('admin.rooms.create') }}" class="text-primary">Add your first room</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection