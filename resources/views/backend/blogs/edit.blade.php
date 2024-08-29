@extends('backend.layouts.master')
@section('main')
    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>

                        <!-- Vertical Form -->
                        <form action="{{ route('blogs.update', $blog) }}" method="post" enctype="multipart/form-data" class="row g-3"
                            id="my-form">
                            @csrf
                            @method('PUT')
                            <div class="col-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $blog->title }}">
                                @error('title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug"
                                    value="{{ $blog->slug }}">
                                @error('slug')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" id="author"
                                    value="{{ $blog->author }}">
                                @error('author')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="editor-container" class="form-label">Description</label>
                                <div>
                                    <div class="quill-editor-full" id="editor-container">
                                        {!! $blog->description !!}
                                    </div>
                                </div>
                                <input type="hidden" name="description" id="description">
                                @error('description')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="iamge" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                @if ($latestImage = $blog->image)
                                    <img class="mt-2" src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}"
                                        style="height: 80px;width:80px;" alt="">
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="alt_text" class="form-label">Alt text</label>
                                <input type="text" name="alt_text" class="form-control" id="alt_text"
                                    value="{{ optional($blog->image)->alt_text }}">
                                @error('alt_text')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <hr>

                            <div class="col-12">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title"
                                    value="{{ optional($blog->meta)->title }}">
                                @error('meta_title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="3">{{ optional($blog->meta)->description }}</textarea>
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
        // Assume `quillEditor` is the existing Quill instance
        var quillEditor = Quill.find(document.getElementById('editor-container'));

        // Update the hidden input field on form submit
        document.querySelector('#my-form').onsubmit = function() {
            // Populate hidden input field with the HTML content from Quill editor
            document.querySelector('#description').value = quillEditor.root.innerHTML;
        };
    </script>
@endsection
