@extends('admin.include.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <div class="h1_main">
                            <h1>{{ isset($header) ? 'Edit' : 'Add' }} Header Menu

                            </h1>
                        </div>
                        <div class="back_btn_admin">
                            <a href="{{ route('headers') }}" class="btn btn-dark" style="float: inline-end">Back</a>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>

        <hr />

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Create Menu</h6>
                    <hr />

                    <form class="row g-3" method="POST" action="{{ isset($header) ? route('update-headerMenu', $header->id) : route('save-headerMenu') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($header))
                        @method('PUT')
                        @endif

                        <label for="navbar" class="form-label" style="color: #495057; font-weight: 400; font-size: 14px;">
                            Select Nav Button
                        </label>
                        <select name="navbar" id="navbar" class="form-control" {{ isset($header) ? 'disabled' : '' }}>
                            <option value="">-- Select a button --</option>
                            <option value="Laptop"
                                {{ old('navbar') == 'Laptop' || (isset($header) && $header->navbar == 'Laptop') ? 'selected' : '' }}>
                                Laptop
                            </option>
                            <option value="Tablet"
                                {{ old('navbar') == 'Tablet' || (isset($header) && $header->navbar == 'Tablet') ? 'selected' : '' }}>
                                Tablet
                            </option>
                            <option value="Apple Devices"
                                {{ old('navbar') == 'Apple Devices' || (isset($header) && $header->navbar == 'Apple Devices') ? 'selected' : '' }}>
                                Apple Devices
                            </option>
                            <option value="Printer"
                                {{ old('navbar') == 'Printer' || (isset($header) && $header->navbar == 'Printer') ? 'selected' : '' }}>
                                Printer
                            </option>
                            <option value="Router"
                                {{ old('navbar') == 'Router' || (isset($header) && $header->navbar == 'Router') ? 'selected' : '' }}>
                                Router
                            </option>
                            <option value="Scanner"
                                {{ old('navbar') == 'Scanner' || (isset($header) && $header->navbar == 'Scanner') ? 'selected' : '' }}>
                                 Scanner
                            </option>

                        </select>

                        <label for="title" class="form-group"
                            style="color: #495057;font-weight:400;font-size:14px">Title</label><br>
                        <input type="title" name="title" id="title" placeholder="Enter header title"
                            class="form-control" value="{{ isset($header) ? $header->title : '' }}" {{ isset($header) ? 'readonly' : '' }}><br>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="banner_content" class="form-group"
                            style="color: #495057;font-weight:400;font-size:14px">Banner Content</label><br>
                        <input type="banner_content" name="banner_content" id="banner_content" placeholder="Enter header banner_content"
                            class="form-control" value="{{ isset($header) ? $header->banner_content : '' }}"><br>
                        @error('banner_content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="banner_image" class="form-group"
                            style="color: #495057;font-weight:400;font-size:14px">Banner Image</label><br>
                        <input type="file" name="banner_image" id="banner_image" placeholder="Enter About banner image"
                            class="form-control" value="{{ isset($header) ? $header->banner_image : '' }}">
                        @if (isset($header) && $header->banner_image)
                        <div>
                            <br>
                            <img src="{{ asset('public/storage/' . $header->banner_image) }}" width="100" height="100"
                                alt="Old banner image"><br>
                        </div>
                        @endif
                        @error('banner_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="slug" class="form-group"
                            style="color: #495057;font-weight:400;font-size:14px">Slug</label><br>
                        <input type="slug" name="slug" id="slug" placeholder="Enter header slug"
                            class="form-control" value="{{ isset($header) ? $header->slug : '' }}"><br>
                        @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="description" class="form-group"
                            style="color: #495057;font-weight:400;font-size:14px">Description</label><br>
                        <textarea name="description" id="description" placeholder="Enter Description" class="form-control">{{ isset($header) ? $header->description : '' }}</textarea><br>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button class="btn btn-primary" type="submit">{{ isset($header) ? 'Update' : 'Submit' }}
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('description', {
            height: 300,
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table', 'HorizontalRule']
                },
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize']
                },
                {
                    name: 'document',
                    items: ['Source']
                }
            ],
            removeButtons: '',
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
            allowedContent: true,
            versionCheck: false
        });
    });
</script>

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
<script>
    document.querySelector('input[name="slug"]').addEventListener('blur', function() {
        this.value = this.value
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    });
</script>

<script>
    $(document).ready(function() {
        $('#header-form').submit(function(e) {
            e.preventDefault();
            for (let instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            const formData = new FormData($(this)[0]);

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    } else {
                        console.error(response);
                    }
                },
                error: function(xhr, status, error) {
                    let errorText = '';

                    if (xhr.status === 422) {
                        // Validation errors
                        const errorJson = JSON.parse(xhr.responseText);
                        $.each(errorJson.errors, function(key, value) {
                            errorText += value[0] + '\n';
                        });
                    } else if (xhr.status === 500) {
                        // Server error
                        errorText = 'An unknown error occurred. Please try again.';
                    } else {
                        // Other errors
                        errorText = xhr.statusText;
                    }

                    alert(errorText);
                }
            });
        });
    });
</script>
@endsection
