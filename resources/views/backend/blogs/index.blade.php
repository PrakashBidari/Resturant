@extends('backend.layouts.master')
@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Blog</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Blog List</h5>
                            <a class="btn btn-primary" href="{{ route('blogs.create') }}">Add Blog</a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Publish Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            @if($latestImage = $blog->image)
                                            <img src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}"
                                                            style="height: 50px;width:50px;" alt="">
                                            @endif
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- @php
                                                    dd($blog->slug);
                                                @endphp --}}
                                                <a class="btn btn-info btn-sm me-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Edit"
                                                    href="{{ route('blogs.edit', $blog) }}">
                                                    <i class="bi bi-pencil" style="color: white;"></i>
                                                </a>
                                                <form id="deleteForm{{ $blog->id }}"
                                                    action="{{ route('blogs.destroy', $blog) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete"
                                                        onclick="confirmDelete({{ $blog->id }})">
                                                        <i class="bi bi-trash" style="color: white;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete?")) {
                document.getElementById('deleteForm' + id).submit();
            } else {}
        }
    </script>
@endsection
