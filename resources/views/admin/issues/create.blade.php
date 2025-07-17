@extends('admin.include.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Issue List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Issue</li>
                    </ol>
                </nav>
            </div>
        </div>

        <hr />

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Create Issue</h6>
                    <hr />

                    <form class="row g-3" method="POST" action="{{ route('issues.store') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Issue Name --}}
                        <div class="col-6">
                            <label class="form-label">Issue Name</label>
                            <input type="text" name="issue_name" class="form-control" value="{{ old('issue_name') }}">
                        </div>

                        {{-- Brand --}}
                        <div class="col-6">
                            <label class="form-label">Brand</label>
                            <select name="brand_id" class="form-select">
                                <option value="">-- Select Brand --</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->brand_name }}
                                    </option>
                                @endforeach
                            </select>
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

                        {{-- Icon --}}
                        <div class="col-6">
                            <label class="form-label">Icon (optional)</label>
                            <input type="file" name="icon" class="form-control">
                        </div>

                        {{-- Submit --}}
                        <div class="col-6">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Issue</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
