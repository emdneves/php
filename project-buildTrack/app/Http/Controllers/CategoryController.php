<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{


    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        }

        $category = new Category();
        $category->name = $request->name;
        $category->image = $imagePath ?? null;
        $category->save();

        return redirect()->route('all_categories')->with('message', 'Category added successfully');
    }


    public function getAllCategories()
    {
        $categories = Category::all();
        return view('categories.all_categories', compact('categories'));
    }


    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit_category', compact('category'));
    }

public function updateCategory(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category->update($validatedData);

    return redirect()->route('all_categories')->with('success', 'Category updated successfully');
}

public function addCategoryView()
{
    return view('categories.add_category');
}


public function deleteCategory($id)
{
    $category = Category::findOrFail($id);
    $isDeleted = $category->delete();

    if ($isDeleted) {
        return redirect()->route('all_categories')->with('success', 'Category deleted successfully');
    } else {
        return redirect()->route('all_categories')->with('error', 'Failed to delete category');
    }
}


}
