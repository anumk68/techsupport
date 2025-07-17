<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    // Display list of brands
    public function index()
    {
        $brands = Brand::with('category')->latest()->get();
        return view('admin.brands.list', compact('brands'));
    }

    // Show create brand form
    public function create()
    {
        $categories = Category::all();
        return view('admin.brands.create', compact('categories'));
    }

    // Store a new brand
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('category_id', 'brand_name');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('brands', 'public');
        }

        Brand::create($data);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully!');
    }

    // Show edit form for the brand
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $categories = Category::all();
        return view('admin.brands.edit', compact('brand', 'categories'));
    }

    // Update the brand
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($brand->image) {
                Storage::disk('public')->delete($brand->image);
            }
            $brand->image = $request->file('image')->store('brands', 'public');
        }

        $brand->update([
            'category_id' => $request->category_id,
            'brand_name' => $request->brand_name,
            'image' => $brand->image,
        ]);

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    // Delete the brand
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        if ($brand->image) {
            Storage::disk('public')->delete($brand->image);
        }

        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
