@extends('backend.layouts.master')
@section('main')
    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>

                        <!-- Vertical Form -->
                        <form action="{{ route('galleries.update', $gallery) }}" method="post" enctype="multipart/form-data"
                            class="row g-3" id="my-form">
                            @csrf
                            @method('PUT')
                            <div class="col-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $gallery->title }}">
                                @error('title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug"
                                    value="{{ $gallery->slug }}">
                                @error('slug')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="col-12">
                                <label for="iamge" class="form-label">Image</label>
                                <input type="file" name="images[]" multiple class="form-control" id="image"
                                    value="{{ old('image') }}">
                                    @if ($errors->hasAny(['images.*', 'images']))
                                    <span class="text-xs text-red-600 dark:text-red-400">
                                        {{ $errors->first('images') }}
                                        @foreach ($errors->get('images.*') as $error)
                                            @php
                                                $i = 0;
                                                echo $error[$i] . '<br>';
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </span>
                                @endif

                                <div class="row gy-4 mt-2" id="image-body">
                                    @if (!is_null($gallery->image))
                                        @foreach ($gallery->image as $image)
                                            <div class="col-md-4 col-sm-6 col-12 my-card" >
                                                <div class="card">
                                                    <img src="{{ Storage::url($image->url . '/' . $image->saved_name) }}"
                                                        alt="" class="w-100">
                                                    <button type="button" class="btn btn-danger mt-3 delete-image-btn"
                                                        data-id="{{ $image->id }}">Delete</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>




                            <hr>

                            <div class="col-12">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title"
                                    value="{{ optional($gallery->meta)->title }}">
                                @error('meta_title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="3">{{ optional($gallery->meta)->description }}</textarea>
                                @error('meta_description')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" onclick="location.reload()" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('customJS')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-image-btn', function() {
                var deleteBtn = $(this);
                var deleteId = deleteBtn.data('id'); // Retrieve product as JSON string
                var url = "{{ route('single-dlt', '') }}" + '/' + deleteId;
                // alert(url)
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        deleteBtn.closest('.my-card').hide();
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
