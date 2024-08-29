@extends('backend.layouts.master')
@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Menu Categories</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Menu Categories</h1>

                <form action="{{ route('categories.store') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="row">
                        <input type="text" name="name" class="form-control me-2" style="width: fit-content"
                            placeholder="Category name">
                        <select name="parent_id" class="form-select me-2" style="width: fit-content">
                            <option value="">No parent</option>
                            @foreach ($allCategories as $category)
                                <option value="{{ $category->id }}">
                                    {{ str_repeat('--', $category->depth) . ' ' . $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary" style="width: fit-content">Add Category</button>
                    </div>
                </form>

                <hr>




                <ul style="list-style: decimal;">
                    @foreach ($categories as $category)
                        @include('backend.categories.partials.category', ['category' => $category])
                        <hr>
                    @endforeach
                </ul>



            </div>
        </div>
    </section>
@endsection
