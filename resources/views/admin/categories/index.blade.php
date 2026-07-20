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
                    <td class="fw-bold">{{ $category->name }}</td>
                    <td>{{ $category->description ?? 'N/A' }}</td>
                    <td>
                        <span class="badge bg-primary">{{ $category->rooms->count() }}</span>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <div class="input-group input-group-sm" style="max-width: 200px;">
                                <input type="text" name="name" value="{{ $category->name }}" 
                                       class="form-control form-control-sm" required>
                                <button type="submit" class="btn btn-outline-luxury">
                                    <i class="fa-solid fa-save"></i>
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