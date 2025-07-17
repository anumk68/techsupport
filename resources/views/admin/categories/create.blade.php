@extends('admin.include.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Category List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Category</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr />

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Create Category</h6>
                    <hr />

                    <form class="row g-3" method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- Category Name --}}
                        <div class="col-6">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" value="{{ old('category_name') }}">
                        </div>

                        {{-- Type --}}
                        <div class="col-6">
                            <label class="form-label">Type</label>
                            <select name="type" class="form-select">
                                <option value="">-- Select Type --</option>
                                <option value="Home" {{ old('type') == 'Home' ? 'selected' : '' }}>Home</option>
                                <option value="Office" {{ old('type') == 'Office' ? 'selected' : '' }}>Office</option>
                            </select>
                        </div>

                        {{-- Image --}}
                        <div class="col-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                            <div class="mt-2">
                                <img id="image-preview" src="#" alt="Image Preview" style="max-height: 100px; display: none;" />
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="col-6">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>


<script>
    function previewImage(event) {
        const preview = document.getElementById('image-preview');
        const file = event.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    }
</script>
@endsection