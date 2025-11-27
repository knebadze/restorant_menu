<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;

class MenuController extends Controller
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
            $menus = Menu::with('category')
                         ->orderBy('display_order')
                         ->paginate(15);

            return view('menu.index', compact('menus'));
        } catch (Exception $e) {
            return back()->with('error', 'Error loading menu items: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->ordered()->get();
        return view('admin.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'name_uk' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'currency' => 'required|string|max:3',
                'description' => 'required|string',
                'description_uk' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'display_order' => 'required|integer|min:0',
                'is_featured' => 'nullable|boolean',
                'is_vegetarian' => 'nullable|boolean',
                'is_spicy' => 'nullable|boolean',
                'is_new' => 'nullable|boolean',
                'is_active' => 'nullable|boolean',
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('menu', 'public');
            }

            // Handle checkboxes
            $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;
            $validated['is_vegetarian'] = $request->has('is_vegetarian') ? 1 : 0;
            $validated['is_spicy'] = $request->has('is_spicy') ? 1 : 0;
            $validated['is_new'] = $request->has('is_new') ? 1 : 0;
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;

            $menu = Menu::create($validated);

            if ($menu) {
                return redirect()->route('menu.index')
                                ->with('success', 'Menu item added successfully!');
            } else {
                return back()->withInput()
                            ->with('error', 'Failed to create menu item!');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return back()->withInput()
                        ->with('error', 'Error creating menu item: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $categories = Category::active()->ordered()->get();
        return view('menu.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'name_uk' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'currency' => 'required|string|max:3',
                'description' => 'required|string',
                'description_uk' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'display_order' => 'required|integer|min:0',
                'is_featured' => 'nullable|boolean',
                'is_vegetarian' => 'nullable|boolean',
                'is_spicy' => 'nullable|boolean',
                'is_new' => 'nullable|boolean',
                'is_active' => 'nullable|boolean',
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image
                if ($menu->image && Storage::disk('public')->exists($menu->image)) {
                    Storage::disk('public')->delete($menu->image);
                }
                $validated['image'] = $request->file('image')->store('menu', 'public');
            }

            // Handle checkboxes
            $validated['is_featured'] = $request->has('is_featured') ? 1 : 0;
            $validated['is_vegetarian'] = $request->has('is_vegetarian') ? 1 : 0;
            $validated['is_spicy'] = $request->has('is_spicy') ? 1 : 0;
            $validated['is_new'] = $request->has('is_new') ? 1 : 0;
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;

            $updated = $menu->update($validated);

            if ($updated) {
                return redirect()->route('menu.index')
                                ->with('success', 'Menu item updated successfully!');
            } else {
                return back()->withInput()
                            ->with('error', 'Failed to update menu item!');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return back()->withInput()
                        ->with('error', 'Error updating menu item: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        try {
            // Delete image if exists
            if ($menu->image && Storage::disk('public')->exists($menu->image)) {
                Storage::disk('public')->delete($menu->image);
            }

            $deleted = $menu->delete();

            if ($deleted) {
                return redirect()->route('menu.index')
                                ->with('success', 'Menu item deleted successfully!');
            } else {
                return back()->with('error', 'Failed to delete menu item!');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Error deleting menu item: ' . $e->getMessage());
        }
    }
}
