<?php

namespace App\Http\Controllers;

use App\Models\HeaderMenu;
use App\Models\NavButton;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HeaderMenuController extends Controller
{
    // show detail
    public function index()
    {
        $header = HeaderMenu::all();
        return view('admin.headerMenu.view', compact('header'));
    }

    // Create new record
    public function create($id = null)
    {
        $header = $id ? HeaderMenu::find($id) : null;
        return view('admin.headerMenu.form', compact('header'));
    }

    //---=-=-=-=-=-=-=Edit and Save ---=-=-=-=-=-=-=-=-=-//
    public function save(Request $request, $id = null)
    {
        if ($id) {
            $header = HeaderMenu::findOrFail($id);
            $request->validate([
                'banner_image' => 'nullable|image',
                'banner_content' => 'required',
                'description' => 'required',
            ]);
        } else {
            $request->validate([
                'title' => 'required',
                'navbar' => 'required',
                'banner_image' => 'required|image',
                'banner_content' => 'required',
                'description' => 'required',
                'slug' => 'required|unique:header_menus,slug',
            ]);
            $header = new HeaderMenu();
            $header->title = $request->input('title');
            $header->navbar = $request->input('navbar');
            $header->slug = Str::slug($request->input('slug'));
        }
        $header->banner_content = $request->input('banner_content');
        $header->description = $request->input('description');
        if ($request->hasFile('banner_image')) {
            if ($id && $header->banner_image) {
                $oldImagePath = public_path('storage/' . $header->banner_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/'), $imageName);
            $header->banner_image = $imageName;
        }
        $header->save();
        return redirect()->route('headers');
    }

    // Delete record
    public function delete($id)
    {
        $header = HeaderMenu::find($id);
        $header->delete();
        return redirect()->route('headers');
    }
}
