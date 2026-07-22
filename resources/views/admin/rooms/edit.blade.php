@extends('layouts.admin')

@section('title', 'Edit Room')

@section('content')
<div class="card card-luxury p-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="mb-0 text-dark"><i class="fa-solid fa-pen-to-square me-2"></i>Edit Room</h4>
        <a href="{{ route('admin.rooms') }}" class="btn btn-outline-dark btn-sm">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Rooms
        </a>
    </div>

    <form action="{{ route('admin.rooms.update', $room) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="title" class="form-label text-muted small fw-bold">Room Name</label>
                <input type="text" id="title" name="title" value="{{ old('title', $room->title) }}" 
                       class="form-control @error('title') is-invalid @enderror" 
                       placeholder="e.g., Deluxe Ocean View" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="category_id" class="form-label text-muted small fw-bold">Category</label>
                <select id="category_id" name="category_id" 
                        class="form-select @error('category_id') is-invalid @enderror" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $room->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="price_per_night" class="form-label text-muted small fw-bold">Price per Night</label>
                <div class="input-group">
                    <span class="input-group-text bg-light">$</span>
                    <input type="number" id="price_per_night" name="price_per_night" value="{{ old('price_per_night', $room->price_per_night) }}" 
                           class="form-control @error('price_per_night') is-invalid @enderror" 
                           placeholder="0.00" step="0.01" required>
                </div>
                @error('price_per_night')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="status" class="form-label text-muted small fw-bold">Status</label>
                <select id="status" name="status" 
                        class="form-select @error('status') is-invalid @enderror" required>
                    <option value="available" {{ old('status', $room->status) == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="booked" {{ old('status', $room->status) == 'booked' ? 'selected' : '' }}>Booked</option>
                    <option value="maintenance" {{ old('status', $room->status) == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="short_description" class="form-label text-muted small fw-bold">Short Description</label>
                <input type="text" id="short_description" name="short_description" value="{{ old('short_description', $room->short_description) }}" 
                       class="form-control @error('short_description') is-invalid @enderror" 
                       placeholder="A brief one-line summary shown on room cards" maxlength="500">
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="description" class="form-label text-muted small fw-bold">Description</label>
                <textarea id="description" name="description" rows="4" 
                          class="form-control @error('description') is-invalid @enderror" 
                          placeholder="Describe the room features, amenities, and highlights...">{{ old('description', $room->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="image" class="form-label text-muted small fw-bold">Room Image</label>

                @if($room->image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($room->image) }}" alt="{{ $room->title }}" class="rounded" style="width: 100px; height: 100px; object-fit: cover;">
                        <p class="text-muted small mb-0">Current image — upload a new file below to replace it.</p>
                    </div>
                @endif

                <input type="file" id="image" name="image" accept="image/*" 
                       class="form-control @error('image') is-invalid @enderror">
                <small class="text-muted">Accepted formats: JPG, PNG, GIF (Max 2MB)</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-luxury px-5 py-3">
                    <i class="fa-solid fa-floppy-disk me-2"></i>Update Room
                </button>
                <a href="{{ route('admin.rooms') }}" class="btn btn-secondary px-5 py-3 ms-2">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
