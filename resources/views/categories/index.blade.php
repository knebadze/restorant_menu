@extends('layouts.admin')

@section('title', 'Categories')
@section('page-title', 'Categories')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Total: {{ $categories->total() }} categories</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New Category
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Icon</th>
                    <th>Name (English)</th>
                    <th>Name (Ukrainian)</th>
                    <th style="width: 100px;" class="text-center">Order</th>
                    <th style="width: 100px;" class="text-center">Items</th>
                    <th style="width: 100px;" class="text-center">Status</th>
                    <th style="width: 150px;" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="text-muted">{{ $category->id }}</td>
                        <td>
                            @if ($category->icon)
                                <i class="{{ $category->icon }} fs-4 text-primary"></i>
                            @else
                                <i class="bi bi-tag fs-5 text-muted"></i>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $category->name }}</strong>
                            @if ($category->description)
                                <br><small class="text-muted">{{ Str::limit($category->description, 50) }}</small>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $category->name_uk }}</strong>
                            @if ($category->description_uk)
                                <br><small class="text-muted">{{ Str::limit($category->description_uk, 50) }}</small>
                            @endif
                        </td>
                        <td class="text-center">
                            <span class="badge bg-secondary">{{ $category->display_order }}</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-info">{{ $category->all_items_count }}</span>
                        </td>
                        <td class="text-center">
                            @if ($category->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <div class="btn-group" role="group">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-outline-primary"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-danger"
                                    onclick="confirmDelete({{ $category->id }})" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <form id="delete-form-{{ $category->id }}"
                                action="{{ route('categories.destroy', $category) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-5">
                            <i class="bi bi-inbox fs-1 text-muted d-block mb-3"></i>
                            <p class="text-muted mb-3">No categories found</p>
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-lg me-1"></i> Add First Category
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($categories->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $categories->links() }}
        </div>
    @endif

@endsection

@push('scripts')
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this category?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endpush
