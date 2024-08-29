@extends('frontend.layouts.master')
@section('main')



    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ $gallery->title }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route ('home')}}">Home</a></span> <span>Gallery
                                Detail</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery mt-5">
        <div class="container-wrap">
            <div class="row g-2">
                @if ($gallery->image->count())
                    @foreach ($gallery->image as $latestImage)
                        <div class="col-sm-6 col-lg-3 ftco-animate mt-4">

                            {{-- <a href="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}" class="gallery img d-flex align-items-center glightbox">
                                <img src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}" alt="image" />
                            </a> --}}

                            <a href="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}" class="gallery img d-flex align-items-center glightbox"
                                style="background-image: url('{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}')">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
