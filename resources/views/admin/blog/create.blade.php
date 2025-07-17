@extends('admin.include.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
                    </ol>
                </nav>
            </div> 
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Blog
                            Create</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">New Blog</h5>

                        <form class="row g-3" id="add_form" class="form-horizontal" enctype="multipart/form-data"
                            action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="title" class="form-label">Blog Title</label>
                                <input type="text" name="title" class="form-control"  placeholder="Blog Title"
                                     value="{{ old('title') }}" required>
                            </div>
                            <div class="col-md-12">
                                <label for="slug" class="form-label">Slug
                                    <small>(https://royalcaretravels.com/blogs)</small></label>
                                <input type="text" name="slug" class="form-control"  placeholder=""  value="{{ old('slug') }}" required>
                            </div>
                            <div class="col-md-12">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="category_id"  required>
                                    <option value="">Select One</option>
                                    @foreach ($blog_categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                              
                            </div>
                            <div class="col-md-12">
                                <label for="banner" class="form-label">Banner Image</label><br>
                                <input type="file" name="banner" accept=".jpg, .png, image/jpeg, image/png" required>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="banner_alt" class="form-label">Banner Alt</label>
                                <input type="text" name="banner_alt" class="form-control" id="banner_alt"
                                    placeholder="Banner Alt"  value="{{ old('banner_alt') }}" required>
                              
                            </div>
                            <div class="col-md-12">
                                <label for="blog_description" class="form-label">Description</label>
                                <textarea class="form-control" id="blog_description" name="description"
                                    placeholder="Description ..." rows="3" required>{{ old('description') }}</textarea>
                             
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title') }}" required>
                             
                            </div>
                            <div class="col-md-12">
                                <label for="meta_img" class="form-label">Meta Image
                                    <small>(824*324)</small>
                                </label>
                                <input type="file" name="meta_img" class="selected-files" required>
                            
                                <div class="file-preview box sm"></div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <textarea name="meta_description" rows="4" class="form-control" required>{{ old('meta_description') }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                    placeholder="Meta Keywords" value="{{ old('meta_keywords') }}" required>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
