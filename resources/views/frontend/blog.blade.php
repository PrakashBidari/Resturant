@extends('frontend.layouts.master')
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/images/blog-coffee.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Blog</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route ('home')}}">Home</a></span> <span>Blog</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                @if ($blogs->count())
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                @if ($latestImage = $blog->image)
                                    <a href="{{ route('blog.detail', $blog) }}" class="block-20"
                                        style="background-image: url({{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }})">
                                    </a>
                                @endif
                                <div class="text py-4 d-block">
                                    <div class="meta">
                                        <div><a href="{{ route('blog.detail', $blog) }}">{{ $blog->created_at->format('M d, Y') }}</a></div>
                                        <div><a href="{{ route('blog.detail', $blog) }}">{{ $blog->author }}</a></div>
                                        {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                                    </div>
                                    <h3 class="heading mt-2"><a href="{{ route('blog.detail', $blog) }}">
                                        {{ strip_tags(Str::limit($blog->title, 30)) }}
                                    </a></h3>
                                    <p>
                                        {!! strip_tags(Str::limit($blog->description, 100)) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                {{-- <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('frontend/images/image_2.jpg')}})">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 28, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('frontend/images/image_3.jpg')}})">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 28, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('frontend/images/image_4.jpg')}})">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 28, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('frontend/images/image_5.jpg')}})">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 28, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('frontend/images/image_6.jpg')}})">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 28, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Coffee Testing Day</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        {{ $blogs->links('frontend.pagination.index') }}
                        {{-- <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
