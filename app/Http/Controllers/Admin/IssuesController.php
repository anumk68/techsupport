<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Brand;
use App\Models\Category;

class IssuesController extends Controller
{
    public function index()
    {
        $issues = Issue::with(['brand', 'category'])->get();
        return view('admin.issues.index', compact('issues'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.issues.create', compact('brands', 'categories'));
    }


 // store the issue
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'brand_id' => 'nullable',
            'category_id' => 'required',
            'issue_name' => 'required|string|max:255',
            'icon' => 'nullable',  
        ]);
       
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons', 'public'); 
            $validatedData['icon'] = $iconPath; 
        }
    
        Issue::create($validatedData);
    
        return redirect()->route('issues.index')->with('success', 'Issue created successfully.');
    }
    




    public function edit($id)
    {
        $issue = Issue::findOrFail($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.issues.edit', compact('issue', 'brands', 'categories'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $issue = Issue::findOrFail($id);
        $request->validate([
            'brand_id' => 'nullable',
            'category_id' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'issue_name' => 'required|string|max:255',
        ]);
    
        
        if ($request->hasFile('icon')) {
          
            if ($issue->icon && file_exists(storage_path('app/public/icons/' . $issue->icon))) {
                unlink(storage_path('app/public/icons/' . $issue->icon)); 
            }
    
           
            $iconPath = $request->file('icon')->store('icons', 'public'); 
            $issue->icon = $iconPath;
        }
    
        
        $issue->update($request->except('icon')); 
    
        
        return redirect()->route('issues.index')->with('success', 'Issue updated successfully.');
    }
    
    
// Delete the specified resource from storage.
    public function destroy($id)
    {
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Issue deleted successfully.');
    }
}

