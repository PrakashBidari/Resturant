<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = Category::with('children.children.children')->whereNull('parent_id')->get();
        $allCategories = Category::all();
        return view('backend.categories.index', compact('categories', 'allCategories'));
    }

    // Store a new category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create($validated);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    // Display a single category and its subcategories
    // public function show(Category $category)
    // {
    //     $category->load('children');
    //     return view('categories.show', compact('category'));
    // }

     // Show the form for editing the specified category
     public function edit(Category $category)
     {
         $allCategories = Category::all();
         return view('backend.categories.edit', compact('category', 'allCategories'));
     }


    // Update the specified category
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Delete the specified category and its children
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }


    public function getChildren($parentId)
    {
        // dd($parentId);
        $childCategories = Category::where('parent_id', $parentId)->get();
        return response()->json($childCategories);
    }
}
