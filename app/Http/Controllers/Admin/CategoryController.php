<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    // public function admindashboard()
    // {
    //     $category = Category::all();
    //     return view('admin.dashboard',compact('category'));
    // }
    // Show all categories
    public function catindex()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    // Show create form
    public function catcreate()
    {
        return view('admin.categories.create');
    }

    // Store new category
    public function catstore(Request $request)
    {
       
        $request->validate([
            'category_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
        }
        Category::create([
            'category_name' => $request->category_name,
            'type' => $request->type,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully!');
    }

    // Show edit form
    public function catedit($id)
    {
       
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Update category
    public function catupdate(Request $request, $id)
    {
        $category = Category::findOrFail($id);
    
        $request->validate([
            'category_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $data = [
            'category_name' => $request->category_name,
            'type' => $request->type,
        ];
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
    
            $imagePath = $request->file('image')->store('categories', 'public');
            $data['image'] = $imagePath;
        }
    
        // Update the category
        $category->update($data);
    
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }
    

    // Delete category (soft delete)
    public function catdestroy($id)
    {
        $category = Category::findOrFail($id);

        // Delete image if exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully!');
    }
}
