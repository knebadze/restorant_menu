@extends('layouts.admin')

@section('title', 'Edit Menu Item')
@section('page-title', 'Edit Menu Item')

@section('content')

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-exclamation-triangle me-2"></i>Error!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form action="{{ route('admin.menu.update', $menu) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">English Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name (English) *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $menu->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description (English) *</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        rows="4" required>{{ old('description', $menu->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Ukrainian Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name_uk" class="form-label">Name (Ukrainian) *</label>
                                    <input type="text" class="form-control @error('name_uk') is-invalid @enderror"
                                        id="name_uk" name="name_uk" value="{{ old('name_uk', $menu->name_uk) }}" required>
                                    @error('name_uk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description_uk" class="form-label">Description (Ukrainian) *</label>
                                    <textarea class="form-control @error('description_uk') is-invalid @enderror" id="description_uk" name="description_uk"
                                        rows="4" required>{{ old('description_uk', $menu->description_uk) }}</textarea>
                                    @error('description_uk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">Settings</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category *</label>
                                    <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                                        name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id', $menu->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-8 mb-3">
                                        <label for="price" class="form-label">Price *</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            id="price" name="price" value="{{ old('price', $menu->price) }}"
                                            step="0.01" min="0" required>
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-4 mb-3">
                                        <label for="currency" class="form-label">Currency</label>
                                        <select class="form-select @error('currency') is-invalid @enderror" id="currency"
                                            name="currency">
                                            <option value="USD"
                                                {{ old('currency', $menu->currency) == 'USD' ? 'selected' : '' }}>USD
                                            </option>
                                            <option value="EUR"
                                                {{ old('currency', $menu->currency) == 'EUR' ? 'selected' : '' }}>EUR
                                            </option>
                                            <option value="GBP"
                                                {{ old('currency', $menu->currency) == 'GBP' ? 'selected' : '' }}>GBP
                                            </option>
                                            <option value="UAH"
                                                {{ old('currency', $menu->currency) == 'UAH' ? 'selected' : '' }}>UAH
                                            </option>
                                        </select>
                                        @error('currency')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="display_order" class="form-label">Display Order *</label>
                                    <input type="number"
                                        class="form-control @error('display_order') is-invalid @enderror"
                                        id="display_order" name="display_order"
                                        value="{{ old('display_order', $menu->display_order) }}" required min="0">
                                    @error('display_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    @if ($menu->image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}"
                                                class="img-thumbnail" style="max-width: 100%; height: auto;">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" accept="image/*">
                                    <small class="text-muted">Max: 2MB (jpeg, png, jpg, gif, webp)</small>
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <hr>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                        value="1" {{ old('is_active', $menu->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Active</label>
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured"
                                        value="1" {{ old('is_featured', $menu->is_featured) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_featured">
                                        <i class="bi bi-star-fill text-warning"></i> Featured
                                    </label>
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="is_new" name="is_new"
                                        value="1" {{ old('is_new', $menu->is_new) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_new">
                                        <i class="bi bi-sparkles text-success"></i> New
                                    </label>
                                </div>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="is_vegetarian"
                                        name="is_vegetarian" value="1"
                                        {{ old('is_vegetarian', $menu->is_vegetarian) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_vegetarian">
                                        <i class="bi bi-leaf text-success"></i> Vegetarian
                                    </label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_spicy" name="is_spicy"
                                        value="1" {{ old('is_spicy', $menu->is_spicy) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_spicy">
                                        <i class="bi bi-fire text-danger"></i> Spicy
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary">
                        <i class="bi bi-x-lg me-1"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
