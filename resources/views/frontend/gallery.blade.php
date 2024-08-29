@extends('frontend.layouts.master')
@section('main')

    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/images/coffee-bg-min.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Gallery</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route ('home')}}">Home</a></span> <span>Gallery</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-gallery">
        <div class="container-fluid">
            <div class="row mt-5">
                @if ($galleries->count())
                    @foreach ($galleries as $gallery)
                        <div class="col-sm-6 col-lg-3 ftco-animate mt-4">
                            <div class="card" style="background-color: #c49b63;">
                                @if ($latestImage = $gallery->image->first())
                                    <a href="{{ route('gallery.detail', $gallery) }}" class="gallery img d-flex align-items-center"
                                        style="background-image: url('{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}')">
                                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                            <span class="icon-search"></span>
                                        </div>
                                    </a>
                                @endif

                                <div class="card-body">
                                   <a href="{{ route('gallery.detail', $gallery) }}"> <h2 class="text-dark" style="font-size: 24px">{{ $gallery->title }}</h2></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>


@endsection
