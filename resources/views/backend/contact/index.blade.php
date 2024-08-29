@extends('backend.layouts.master')
@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Contacts</a></li>
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
                            <h5 class="card-title">Contacts List</h5>
                            <a class="btn btn-primary" href="{{ route('galleries.create') }}">Add Gallery</a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $blog)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>

                                        <td>{{ $blog->name }}</td>
                                        <td>{{ $blog->email }}</td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- @php
                                                    dd($blog->slug);
                                                @endphp --}}
                                                <a class="btn btn-info btn-sm me-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Show"
                                                    href="{{ route('contacts.show', $blog) }}">
                                                    <i class="bi bi-eye" style="color: white;"></i>
                                                </a>
                                                <form id="deleteForm{{ $blog->id }}"
                                                    action="{{ route('contacts.destroy', $blog) }}" method="POST">
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
