@extends('layouts.admin')

@section('title', 'Manage Categories')

@section('content')
<div class="card card-luxury p-4">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
        <h4 class="mb-0 text-dark"><i class="fa-solid fa-tags me-2"></i>Category Management</h4>
    </div>

    <!-- Add Category Form -->
    <div class="bg-light p-3 rounded-3 mb-4">
        <form action="{{ route('admin.categories.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-5">
                <input type="text" name="name" placeholder="Category Name" 
                       class="form-control @error('name') is-invalid @enderror" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-5">
                <input type="text" name="description" placeholder="Description (Optional)" 
                       class="form-control">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-luxury w-100">
                    <i class="fa-solid fa-plus me-2"></i>Add
                </button>
            </div>
        </form>
    </div>

    <!-- Categories Table -->
    <div class="table-responsive">
        <table class="table table-hover table-luxury align-middle text-start mb-0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Rooms</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>

                <!-- Display mode -->
                <td class="fw-bold category-display-{{ $category->id }}">{{ $category->name }}</td>
                <td class="category-display-{{ $category->id }}">
                    {{ $category->description ?? 'N/A' }}
                </td>

                <td>
                    <span class="badge bg-primary">{{ $category->rooms->count() }}</span>
                </td>

                <td class="text-center">
                    <!-- Edit icon (shown by default) -->
                    <button type="button" class="btn btn-sm btn-outline-luxury category-edit-btn-{{ $category->id }}" 
                            onclick="toggleEdit({{ $category->id }})">
                        <i class="fa-solid fa-pen"></i>
                    </button>

                    <!-- Inline edit form (hidden by default) -->
                    <form action="{{ route('admin.categories.update', $category) }}" method="POST" 
                        class="d-none category-edit-form-{{ $category->id }} d-inline">
                        @csrf
                        @method('PUT')
                        <div class="d-inline-flex gap-1" style="max-width: 320px;">
                            <input type="text" name="name" value="{{ $category->name }}" 
                                class="form-control form-control-sm" style="max-width: 120px;" required>
                            <input type="text" name="description" value="{{ $category->description }}" 
                                placeholder="Click to add description" 
                                class="form-control form-control-sm {{ !$category->description ? 'text-muted fst-italic' : '' }}" 
                                style="max-width: 140px;">
                            <button type="submit" class="btn btn-sm btn-outline-luxury">
                                <i class="fa-solid fa-save"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" 
                                    onclick="toggleEdit({{ $category->id }})">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </form>

                    <form action="{{ route('admin.categories.delete', $category) }}" method="POST" class="d-inline ms-2" 
                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-muted">
                    <i class="fa-solid fa-tags fa-2x d-block mb-2"></i>
                    No categories found. Add one using the form above.
                </td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
function toggleEdit(id) {
    document.querySelectorAll('.category-display-' + id).forEach(el => el.classList.toggle('d-none'));
    document.querySelector('.category-edit-btn-' + id).classList.toggle('d-none');
    document.querySelector('.category-edit-form-' + id).classList.toggle('d-none');
}
</script>
@endpush