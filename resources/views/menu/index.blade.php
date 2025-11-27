@extends('layouts.admin')

@section('title', 'Menu Items')
@section('page-title', 'Menu Items')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Total: {{ $menus->total() }} items</p>
        </div>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i> New Menu Item
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th style="width: 80px;">Image</th>
                    <th>Name (English)</th>
                    <th>Name (Ukrainian)</th>
                    <th>Category</th>
                    <th style="width: 100px;">Price</th>
                    <th style="width: 80px;" class="text-center">Order</th>
                    <th style="width: 100px;" class="text-center">Badges</th>
                    <th style="width: 100px;" class="text-center">Status</th>
                    <th style="width: 150px;" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menus as $menu)
                    <tr>
                        <td class="text-muted">{{ $menu->id }}</td>
                        <td>
                            @if ($menu->image)
                                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="rounded"
                                    style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $menu->name }}</strong>
                            <br><small class="text-muted">{{ Str::limit($menu->description, 40) }}</small>
                        </td>
                        <td>
                            <strong>{{ $menu->name_uk }}</strong>
                            <br><small class="text-muted">{{ Str::limit($menu->description_uk, 40) }}</small>
                        </td>
                        <td>
                            <span class="badge bg-secondary">
                                <i class="{{ $menu->category->icon ?? 'bi bi-tag' }} me-1"></i>
                                {{ $menu->category->name }}
                            </span>
                        </td>
                        <td>
                            <strong>{{ $menu->formatted_price }}</strong>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-secondary">{{ $menu->display_order }}</span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex gap-1 justify-content-center flex-wrap">
                                @if ($menu->is_featured)
                                    <span class="badge bg-warning text-dark" title="Featured">
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                @endif
                                @if ($menu->is_new)
                                    <span class="badge bg-success" title="New">
                                        <i class="bi bi-sparkles"></i>
                                    </span>
                                @endif
                                @if ($menu->is_vegetarian)
                                    <span class="badge bg-success" title="Vegetarian">
                                        <i class="bi bi-leaf"></i>
                                    </span>
                                @endif
                                @if ($menu->is_spicy)
                                    <span class="badge bg-danger" title="Spicy">
                                        <i class="bi bi-fire"></i>
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($menu->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <div class="btn-group" role="group">
                                <a href="{{ route('menu.edit', $menu) }}" class="btn btn-sm btn-outline-primary"
                                    title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-danger"
                                    onclick="confirmDelete({{ $menu->id }})" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <form id="delete-form-{{ $menu->id }}" action="{{ route('menu.destroy', $menu) }}"
                                method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center py-5">
                            <i class="bi bi-inbox fs-1 text-muted d-block mb-3"></i>
                            <p class="text-muted mb-3">No menu items found</p>
                            <a href="{{ route('menu.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-lg me-1"></i> Add First Item
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($menus->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $menus->links() }}
        </div>
    @endif

@endsection

@push('scripts')
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this menu item?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endpush
