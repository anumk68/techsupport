@extends('admin.include.app')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Issue List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('issues.create') }}">
                        <button type="button" class="btn btn-primary">Create Issue</button>
                    </a>
                </div>
            </div>
        </div>

        <hr />

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Icone</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Issue Name</th>
                                <th>Created Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($issues as $issue)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                   <td>
                                            @if ($issue->icon)
                                                <img src="{{ asset('storage/app/public/' . $issue->icon) }}"
                                                    alt="icone"
                                                    style="height: 60px; width: 60px; object-fit: cover;">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                    <td>{{ $issue->brand->brand_name ?? 'N/A' }}</td>
                                    <td>{{ $issue->category->category_name ?? 'N/A' }}</td>
                                    <td>{{ $issue->issue_name }}</td>
                                    <td>{{ $issue->created_at }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-2 fs-6">
                                            {{-- Edit --}}
                                            <a href="{{ route('issues.edit', $issue->id) }}"
                                                class="text-warning" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>

                                            {{-- Delete --}}
                                            <form action="{{ route('issues.destroy', $issue->id) }}"
                                                method="POST" class="delete-form" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button"
                                                    class="btn btn-link p-0 m-0 border-0 bg-transparent text-danger delete-btn"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (e) {
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
