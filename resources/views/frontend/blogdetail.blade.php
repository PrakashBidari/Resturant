@extends('frontend.layouts.master')
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ strip_tags(Str::limit($blog->title, 20)) }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route ('home')}}">Home</a></span> <span
                                class="mr-2"><a href="{{route ('blog')}}">Blog</a></span> <span>Blog Single</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        @if ($latestImage = $blog->image)
                            <img src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}" alt=""
                                class="img-fluid w-100">
                        @endif
                    </p>
                    <h2 class="mb-3 mt-5">{{ $blog->title }}</h2>
                    <p>{!! $blog->description !!}</p>


                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>


                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @if ($recentBlogs->count())
                            @foreach ($recentBlogs as $recentBlog)
                                <div class="block-21 mb-4 d-flex">
                                    @if ($latestImage = $recentBlog->image)
                                        <a class="blog-img mr-4" href="{{ route('blog.detail', $recentBlog) }}"
                                            style="background-image: url({{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }});"></a>
                                    @endif
                                    <div class="text">
                                        <h3 class="heading"><a href="{{ route('blog.detail', $recentBlog) }}">{{ strip_tags(Str::limit($recentBlog->title, 30)) }}</a></h3>
                                        <div class="meta">
                                            <div><a href="{{ route('blog.detail', $recentBlog) }}"><span class="icon-calendar"></span> {{ $blog->created_at->format('M d, Y') }}</a>
                                            </div>
                                            <div><a href="{{ route('blog.detail', $recentBlog) }}"><span class="icon-person"></span> {{ $blog->author }}</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
