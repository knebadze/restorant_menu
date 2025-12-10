<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class PublicMenuController extends Controller
{
    /**
     * Display the public menu page.
     */
    public function index()
    {
        // Get all active categories with their active menu items
        $categories = Category::active()
                              ->ordered()
                              ->with(['items' => function($query) {
                                  $query->active()->ordered();
                              }])
                              ->get();
        $menuItems = Menu::active()->ordered()->get();

        return view('menu', compact('categories', 'menuItems'));
    }

    /**
     * Display a specific category menu.
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
                            ->active()
                            ->with(['items' => function($query) {
                                $query->active()->ordered();
                            }])
                            ->firstOrFail();

        $categories = Category::active()->ordered()->get();

        return view('menu', compact('categories', 'category'));
    }

    /**
     * Search menu items.
     */
    public function search(Request $request)
    {
        $query = $request->input('q');

        $menuItems = Menu::active()
                        ->where(function($q) use ($query) {
                            $q->where('name', 'like', "%{$query}%")
                              ->orWhere('name_uk', 'like', "%{$query}%")
                              ->orWhere('description', 'like', "%{$query}%")
                              ->orWhere('description_uk', 'like', "%{$query}%");
                        })
                        ->with('category')
                        ->ordered()
                        ->get();

        $categories = Category::active()->ordered()->get();

        return view('menu', compact('categories', 'menuItems', 'query'));
    }
}
