<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = Category::withCount('allItems')
                                  ->orderBy('display_order')
                                  ->paginate(15);

            return view('admin.categories.index', compact('categories'));
        } catch (Exception $e) {
            return back()->with('error', 'Error loading categories: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'name_uk' => 'required|string|max:255',
                'description' => 'nullable|string',
                'description_uk' => 'nullable|string',
                'icon' => 'nullable|string|max:255',
                'display_order' => 'required|integer|min:0',
                'is_active' => 'nullable|boolean',
            ]);

            $validated['slug'] = Str::slug($validated['name']);
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;

            $category = Category::create($validated);

            if ($category) {
                return redirect()->route('categories.index')
                                ->with('success', 'Category added successfully!');
            } else {
                return back()->withInput()
                            ->with('error', 'Failed to create category!');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return back()->withInput()
                        ->with('error', 'Error creating category: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'name_uk' => 'required|string|max:255',
                'description' => 'nullable|string',
                'description_uk' => 'nullable|string',
                'icon' => 'nullable|string|max:255',
                'display_order' => 'required|integer|min:0',
                'is_active' => 'nullable|boolean',
            ]);

            $validated['slug'] = Str::slug($validated['name']);
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;

            $updated = $category->update($validated);

            if ($updated) {
                return redirect()->route('admin.categories.index')
                                ->with('success', 'Category updated successfully!');
            } else {
                return back()->withInput()
                            ->with('error', 'Failed to update category!');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return back()->withInput()
                        ->with('error', 'Error updating category: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            if ($category->allItems()->count() > 0) {
                return back()->with('error', 'Cannot delete category because it has menu items!');
            }

            $deleted = $category->delete();

            if ($deleted) {
                return redirect()->route('admin.categories.index')
                                ->with('success', 'Category deleted successfully!');
            } else {
                return back()->with('error', 'Failed to delete category!');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Error deleting category: ' . $e->getMessage());
        }
    }
}
