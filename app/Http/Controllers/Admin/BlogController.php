<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog.list', compact('blogs'));
    }

    // create new blogs
    public function create(){
        $blog_categories = BlogCategory::all();
        return view('admin.blog.create', compact('blog_categories'));
    }
    
    // store blogs
    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'meta_title' => 'required',
            'banner_alt' => 'required',
            'slug' => 'required|unique:blogs,slug',
            'banner' => 'required|image|mimes:jpeg,png,jpg',
            'meta_img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $blog = new Blog;

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->banner = 'uploads/' . $filename;
        } elseif ($request->has('banner') && isset($blog->banner)) { 
            $blog->banner = $blog->banner; 
        }
    
        if ($request->hasFile('meta_img')) {
            $file = $request->file('meta_img');
            $filename = time() . '_meta.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->meta_img = 'uploads/' . $filename;
        } elseif ($request->has('meta_img') && isset($blog->meta_img)) { 
            $blog->meta_img = $blog->meta_img; 
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower(trim($slug, '-'));
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->banner_alt = $request->banner_alt;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;

        $blog->save();

        return redirect()->route('admin.blog')->with('success', 'Blog post has been created successfully');
    }

    // edit blogs in admin
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_categories = BlogCategory::all();
        return view('admin.blog.edit',  compact('blog', 'blog_categories'));
    }

    // delete blogs in admin
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();
            return redirect()->route('admin.blog')->with('success', 'Blog post has been deleted successfully');
        }
    }

    // update blogs in admin
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $blog = Blog::find($id);
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $newSlug = strtolower(trim($slug, '-'));

        if ($request->hasFile('banner')) {
           
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->banner = 'uploads/' . $filename;
        }

        if ($request->hasFile('meta_img')) {
            
            $file = $request->file('meta_img');
            $filename = time() . '_meta.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->meta_img = 'uploads/' . $filename;
        }
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower(trim($slug, '-'));
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->banner_alt = $request->banner_alt;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->save();

        return redirect()->route('admin.blog')->with('success', 'Blog post has been updated successfully');
    }

}
