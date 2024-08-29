@extends('frontend.layouts.master')
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ strip_tags(Str::limit($training->title, 20)) }}</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route ('home')}}">Home</a></span> <span
                                class="mr-2"><a href="{{route ('trainings')}}">Training</a></span> <span>Training Detail</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <p>
                        @if ($latestImage = $training->image)
                            <img src="{{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }}" alt=""
                                class="img-fluid w-100">
                        @endif
                    </p>
                    <h2 class="mb-3 mt-5">{{ $training->title }}</h2>
                    <p>{!! $training->description !!}</p>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->
@endsection
