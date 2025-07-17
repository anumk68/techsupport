<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Inquery;
class AdminController extends Controller
{
    // dashboard view functiona
    
    public function admindashboard(){
         $category = Category::all();
        return view('admin.dashboard',compact('category'));
    }

   
}

