@extends('layouts.admin')

@section('title', 'Create Room')

@section('content')
<div class="card card-luxury p-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="mb-0 text-dark"><i class="fa-solid fa-plus-circle me-2"></i>Add New Room</h4>
        <a href="{{ route('admin.rooms') }}" class="btn btn-outline-dark btn-sm">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Rooms
        </a>
    </div>

    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label text-muted small fw-bold">Room Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                       class="form-control @error('name') is-invalid @enderror" 
                       placeholder="e.g., Deluxe Ocean View" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="category_id" class="form-label text-muted small fw-bold">Category</label>
                <select id="category_id" name="category_id" 
                        class="form-select @error('category_id') is-invalid @enderror" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label text-muted small fw-bold">Price per Night</label>
                <div class="input-group">
                    <span class="input-group-text bg-light">$</span>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" 
                           class="form-control @error('price') is-invalid @enderror" 
                           placeholder="0.00" step="0.01" required>
                </div>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="status" class="form-label text-muted small fw-bold">Status</label>
                <select id="status" name="status" 
                        class="form-select @error('status') is-invalid @enderror" required>
                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="booked" {{ old('status') == 'booked' ? 'selected' : '' }}>Booked</option>
                    <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="description" class="form-label text-muted small fw-bold">Description</label>
                <textarea id="description" name="description" rows="4" 
                          class="form-control @error('description') is-invalid @enderror" 
                          placeholder="Describe the room features, amenities, and highlights...">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="image" class="form-label text-muted small fw-bold">Room Image</label>
                <input type="file" id="image" name="image" accept="image/*" 
                       class="form-control @error('image') is-invalid @enderror">
                <small class="text-muted">Accepted formats: JPG, PNG, GIF (Max 2MB)</small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-luxury px-5 py-3">
                    <i class="fa-solid fa-floppy-disk me-2"></i>Create Room
                </button>
                <a href="{{ route('admin.rooms') }}" class="btn btn-secondary px-5 py-3 ms-2">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection