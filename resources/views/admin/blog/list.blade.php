@extends('admin.include.app')

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<style>
	.dataTables_wrapper .dataTables_length select {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		color: inherit;
		padding: 5px 19px !important;
	}
</style>
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admindashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Blog
                            Create</button></a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="flight_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <div class="">
                                            <p class="mb-0">{{ $blog->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($blog->category != null)
                                    {{ $blog->category->category_name }}
                                    @else
                                    --
                                    @endif
                                </td>
                                <td>{{ $blog->status }}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-2 fs-6">
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary mb-3"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Edit</a>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                            class="delete-form" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@endsection
@endsection
