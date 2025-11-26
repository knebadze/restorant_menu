<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display the menu page with categories and items from database.
     */
    public function index()
    {
        // Get all active categories with their active items, ordered by display_order
        $categories = Category::active()
            ->ordered()
            ->with(['items' => function($query) {
                $query->active()->ordered();
            }])
            ->get();

        return view('menu', compact('categories'));
    }

    /**
     * Display a specific category.
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->with(['items' => function($query) {
                $query->active()->ordered();
            }])
            ->firstOrFail();

        return view('menu.category', compact('category'));
    }

    /**
     * Display a specific menu item.
     */
    public function show($id)
    {
        $item = Menu::with('category')->findOrFail($id);

        return view('menu.show', compact('item'));
    }

    /**
     * Get featured menu items.
     */
    public function featured()
    {
        $featuredItems = Menu::active()
            ->featured()
            ->with('category')
            ->ordered()
            ->get();

        return view('menu.featured', compact('featuredItems'));
    }
}
