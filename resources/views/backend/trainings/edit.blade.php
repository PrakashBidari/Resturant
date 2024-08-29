@extends('backend.layouts.master')
@section('main')
    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>

                        <!-- Vertical Form -->
                        <form action="{{ route('trainings.update', $training) }}" method="post" enctype="multipart/form-data"
                            class="row g-3" id="my-form">
                            @csrf
                            @method('PUT')
                            <div class="col-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $training->title }}">
                                @error('title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug"
                                    value="{{ $training->slug }}">
                                @error('slug')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="editor-container" class="form-label">Description</label>
                                <div>
                                    <div class="quill-editor-full" id="editor-container">
                                        {!! $training->description !!}
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
                                @if ($latestImage = $training->image)
                                    <img class="mt-2"
                                        src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}"
                                        style="height: 80px;width:80px;" alt="">
                                @endif
                            </div>

                            <div class="col-6">
                                <label for="alt_text" class="form-label">Alt text</label>
                                <input type="text" name="alt_text" class="form-control" id="alt_text"
                                    value="{{ optional($training->image)->alt_text }}">
                                @error('alt_text')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="category" class="form-label">Select Services Categories</label>
                                <select class="form-select" name="category" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->value }}"
                                            {{ ($category->value === $training->category->value) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                            <hr>

                            <div class="col-12">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" id="meta_title"
                                    value="{{ optional($training->meta)->title }}">
                                @error('meta_title')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="3">{{ optional($training->meta)->description }}</textarea>
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
