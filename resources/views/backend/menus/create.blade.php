@extends('backend.layouts.master')
@section('main')
    <style>
        .menu-image {
            transition: all .5s ease-in-out;
        }

        .menu-image:hover {
            transform: scale(3);
        }
    </style>


    <section>
        <div class="card">
            <div class="card-body">

                <h1 class="card-title">Food Menu</h1>

                <!-- Form to add a new menu item -->
                <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="title" placeholder="Menu Title" required>
                        </div>

                        <div class="col-md-6">
                            <input class="form-control" type="number" step="0.01" name="price" placeholder="Price"
                                required>
                        </div>


                        <div class="col-md-6 mt-3">
                            <!-- Select for main category -->
                            <select class="form-select" id="parent-category" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($parentCategories as $parentCategory)
                                    <option value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mt-3">
                            <!-- Select for child category -->
                            <select class="form-select" id="child-category" name="subcategory_id">
                                <option value="">Select Subcategory</option>
                                <!-- Child categories will be loaded here via AJAX -->
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>

                        <div class="col-md-6 mt-3">
                            <button type="submit" class="btn btn-primary" style="width: fit-content">Add Menu Item</button>
                        </div>

                    </div>
                </form>

                <hr>

                <!-- Display menu items -->
                <h4 class="card-title fs-4">Menu List</h4>
                <ul class="mt-4" style="list-style: decimal">
                    @foreach ($menus as $menu)
                        <li class="mt-4">
                            <div class="menu-item" style="font-size: 1.2em;">

                                <div class="row">
                                    <div class="col-md-2">{{ $menu->category->name }}</div>
                                    <div class="col-md-1">
                                        {{-- {{ $menu->subcategory->name ?? '' }} --}}
                                        {{ $menu->subcategory ? $menu->subcategory->name : 'No Subcategory' }}
                                        </div>
                                    <div class="col-md-3">{{ $menu->title }} - Rs. {{ $menu->price }}</div>
                                    <div class="col-md-2">
                                        @if ($latestImage = $menu->image)
                                            <img class="menu-image"
                                                src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}"
                                                style="height: 50px;width:50px;" alt="">
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <a class="btn btn-sm btn-primary ms-2 edit-menu" href="#">Edit</a>
                                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Inline edit form -->
                            <div class="edit-form" style="display: none;">
                                <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="title" value="{{ $menu->title }}" required>
                                    <input type="number" step="0.01" name="price" value="{{ $menu->price }}"
                                        required>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input type="file" name="image" class="form-control mt-2"
                                                placeholder="image">
                                            <div class="col-md-6">
                                                @if ($latestImage = $menu->image)
                                                    <img class="menu-image"
                                                        src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}"
                                                        style="height: 50px;width:50px;" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-success" type="submit">Save</button>
                                    <button class="btn btn-sm btn-secondary cancel-edit" type="button">Cancel</button>
                                </form>
                            </div>


                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script>
        $(document).ready(function() {
            // Inline editing
            $(document).on('click', '.edit-menu', function(e) {
                e.preventDefault();
                let listItem = $(this).closest('li');
                listItem.find('.menu-item').hide();
                listItem.find('.edit-form').show();
            });

            $(document).on('click', '.cancel-edit', function() {
                let listItem = $(this).closest('li');
                listItem.find('.edit-form').hide();
                listItem.find('.menu-item').show();
            });

            // Fetch child categories using AJAX
            $('#parent-category').on('change', function() {
                let parentId = $(this).val();
                let childCategorySelect = $('#child-category');

                // alert("hello")
                // Clear existing options
                childCategorySelect.html('<option value="">Select a subcategory</option>');

                if (parentId) {
                    $.ajax({
                        url: `/admin/categories/${parentId}/children`,
                        type: 'GET',
                        success: function(data) {
                            data.forEach(function(category) {
                                let option = $('<option></option>')
                                    .attr('value', category.id)
                                    .text(category.name);
                                childCategorySelect.append(option);
                            });
                        },
                        error: function(error) {
                            console.error('Error fetching child categories:', error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
