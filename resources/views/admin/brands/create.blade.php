@extends('admin.include.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Brand List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Brand</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr />

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Create Brand</h6>
                    <hr />

                    <form class="row g-3" method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Brand Name --}}
                        <div class="col-6">
                            <label class="form-label">Brand Name</label>
                            <input type="text" name="brand_name" class="form-control" value="{{ old('brand_name') }}">
                        </div>

                        {{-- Category --}}
                        <div class="col-6">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-select">
                                <option value="">-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
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
                                <button type="submit" class="btn btn-primary">Create Brand</button>
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
