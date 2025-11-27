@extends('layouts.admin')

@section('title', 'New Category')
@section('page-title', 'New Category')

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

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">English Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name (English) *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description (English)</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                rows="3">{{ old('description') }}</textarea>
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
                            <input type="text" class="form-control @error('name_uk') is-invalid @enderror" id="name_uk"
                                name="name_uk" value="{{ old('name_uk') }}" required>
                            @error('name_uk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_uk" class="form-label">Description (Ukrainian)</label>
                            <textarea class="form-control @error('description_uk') is-invalid @enderror" id="description_uk" name="description_uk"
                                rows="3">{{ old('description_uk') }}</textarea>
                            @error('description_uk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Additional Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="icon" class="form-label">Icon (Bootstrap Icons)</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                    id="icon" name="icon" value="{{ old('icon', 'bi bi-tag') }}"
                                    placeholder="bi bi-tag">
                                <small class="text-muted">e.g: bi bi-cup-hot, bi bi-egg-fried</small>
                                @error('icon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="display_order" class="form-label">Display Order *</label>
                                <input type="number" class="form-control @error('display_order') is-invalid @enderror"
                                    id="display_order" name="display_order" value="{{ old('display_order', 0) }}" required
                                    min="0">
                                @error('display_order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
                                {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Active Category
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                        <i class="bi bi-x-lg me-1"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
