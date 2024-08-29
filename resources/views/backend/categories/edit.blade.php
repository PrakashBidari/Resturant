@extends('backend.layouts.master')
@section('main')

    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $category->name }}" placeholder="Category name">
        <select name="parent_id">
            <option value="">No parent</option>
            @foreach ($allCategories as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>
                    {{ str_repeat('--', $cat->depth) . ' ' . $cat->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Update Category</button>
    </form>
    
@endsection
