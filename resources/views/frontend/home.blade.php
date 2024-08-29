 @extends('frontend.layouts.master')
 @section('main')
     <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container my-5 py-5">
             <div class="row align-items-center g-5">
                 <div class="col-lg-6 text-center text-lg-start">
                     <h1 class="display-3 text-white animated slideInLeft">The Best<br>Delicious Meal</h1>
                     <p class="text-white animated slideInLeft mb-4 pb-2">Welcome to Bethel Gurkha Coffee Garden. This is the
                         art of the natural library, which was started at our Bethel Home Garden. On many occasions, Gurkha
                         loves to drink, coffee for freshness and rest. Coffee culture is increasing, day by day in the
                         world rather than alcohol culture.</p>
                     <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                 </div>
                 <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                     <img class="img-fluid" src="{{ asset('frontend/img/hero.png') }}" alt="">
                 </div>
             </div>
         </div>
     </div>

     <!-- Service Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-4">
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                             <h5>Master Chefs</h5>
                             <p>culinary professional who has achieved the highest level of skill</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                             <h5>Quality Food</h5>
                             <p>Quality food refers to food that is produced, and presented to high standards</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                             <h5>Health Benefits</h5>
                             <p>Quality food is essential for good health. It provides the necessary nutrients.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                             <h5>Taste and Flavor</h5>
                             <p>The flavor profile is a key aspect of quality food.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Service End -->


     <!-- About Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-5 align-items-center">
                 <div class="col-lg-6">
                     <div class="row g-3">
                         <div class="col-6 text-start">
                             <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                 src="{{ asset('frontend/img/about-1.jpg') }}">
                         </div>
                         <div class="col-6 text-start">
                             <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                 src="{{ asset('frontend/img/about-2.jpg') }}" style="margin-top: 25%;">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                 src="{{ asset('frontend/img/about-3.jpg') }}">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                 src="{{ asset('frontend/img/about-4.jpg') }}">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                     <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Bethel</h1>
                     <p class="mb-4">
                         Welcome to Bethel Gurkha Coffee Garden This is the art of the natural library, which was started at
                         our Bethel Home Garden. On many occasions, Gurkha loves to drink, coffee for freshness and rest.
                         Coffee culture is increasing, day by day in the world rather than alcohol culture. So we have
                         started Coffee Garden as a new culture in our Nepalese communities. We hope you love this civilized
                         culture.
                     </p>
                     <div class="row g-4 mb-4">
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                 <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                 <div class="ps-4">
                                     <p class="mb-0">Years of</p>
                                     <h6 class="text-uppercase mb-0">Experience</h6>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                 <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                 <div class="ps-4">
                                     <p class="mb-0">Popular</p>
                                     <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- About End -->


     <!-- Menu Start -->
     {{-- <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                 <h1 class="mb-5">Most Popular Items</h1>
             </div>
             <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                 <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                     <li class="nav-item">
                         <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                             href="#tab-1">
                             <i class="fa fa-coffee fa-2x text-primary"></i>
                             <div class="ps-3">
                                 <small class="text-body">Popular</small>
                                 <h6 class="mt-n1 mb-0">Breakfast</h6>
                             </div>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                             <i class="fa fa-hamburger fa-2x text-primary"></i>
                             <div class="ps-3">
                                 <small class="text-body">Special</small>
                                 <h6 class="mt-n1 mb-0">Launch</h6>
                             </div>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                             href="#tab-3">
                             <i class="fa fa-utensils fa-2x text-primary"></i>
                             <div class="ps-3">
                                 <small class="text-body">Lovely</small>
                                 <h6 class="mt-n1 mb-0">Dinner</h6>
                             </div>
                         </a>
                     </li>
                 </ul>
                 <div class="tab-content">
                     <div id="tab-1" class="tab-pane fade show p-0 active">
                         <div class="row g-4">
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-1.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-2.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-3.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-4.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-5.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-6.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-7.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-8.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div id="tab-2" class="tab-pane fade show p-0">
                         <div class="row g-4">
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-1.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-2.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-3.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-4.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-5.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-6.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-7.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-8.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div id="tab-3" class="tab-pane fade show p-0">
                         <div class="row g-4">
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-1.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-2.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-3.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-4.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-5.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-6.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-7.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="d-flex align-items-center">
                                     <img class="flex-shrink-0 img-fluid rounded"
                                         src="{{ asset('frontend/img/menu-8.jpg') }}" alt=""
                                         style="width: 80px;">
                                     <div class="w-100 d-flex flex-column text-start ps-4">
                                         <h5 class="d-flex justify-content-between border-bottom pb-2">
                                             <span>Chicken Burger</span>
                                             <span class="text-primary">$115</span>
                                         </h5>
                                         <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}

     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                 <h1 class="mb-5">Most Popular Items</h1>
             </div>
             <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">


                 <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                     @foreach ($categories as $category)
                         <li class="nav-item">
                             <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 category-link"
                                 data-bs-toggle="pill" href="#tab-{{ $category->id }}" data-parent-id="{{ $category->id }}">
                                 {{-- <i class="fa fa-utensils fa-2x text-primary"></i> --}}
                                 <div class="ps-3">
                                     {{-- <small class="text-body">{{ $category->description }}</small> --}}
                                     <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                                 </div>
                             </a>
                         </li>
                     @endforeach
                 </ul>

                 <div class="tab-content">
                     <div class="row">
                         <div id="tab-content-placeholder"
                             class="tab-pane fade show p-0 active row justify-content-between gx-5">
                             <!-- Content will be loaded here via AJAX -->
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </div>

     <!-- Menu End -->


     <!-- Reservation Start -->
     <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
         <div class="row g-0">
             <div class="col-md-6">
                 <div class="video">
                     <button type="button" class="btn-play" data-bs-toggle="modal"
                         data-src="https://www.youtube.com/embed/xFqVf6E00Lk" data-bs-target="#videoModal">
                         <span></span>
                     </button>
                 </div>
             </div>
             <div class="col-md-6 bg-dark d-flex align-items-center">
                 <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                     <h5 class="section-title ff-secondary text-start text-primary fw-normal">Contact</h5>
                     <h1 class="text-white mb-4">Contact Us</h1>
                     <form>
                         <div class="row g-3">
                             <div class="col-md-6">
                                 <div class="form-floating">
                                     <input type="text" class="form-control" id="name" placeholder="Your Name">
                                     <label for="name">Your Name</label>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-floating">
                                     <input type="email" class="form-control" id="email" placeholder="Your Email">
                                     <label for="email">Your Email</label>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-floating date" id="date3" data-target-input="nearest">
                                     <input type="text" class="form-control datetimepicker-input" id="datetime"
                                         placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                     <label for="datetime">Date & Time</label>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-floating">
                                     <select class="form-select" id="select1">
                                         <option value="1">People 1</option>
                                         <option value="2">People 2</option>
                                         <option value="3">People 3</option>
                                     </select>
                                     <label for="select1">No Of People</label>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="form-floating">
                                     <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                     <label for="message">Special Request</label>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content rounded-0">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <!-- 16:9 aspect ratio -->
                     <div class="ratio ratio-16x9">
                         <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                             allowscriptaccess="always" allow="autoplay"></iframe>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Reservation Start -->


     <!-- Team Start -->
     <div class="container-xxl pt-5 pb-3">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                 <h1 class="mb-5">Our Team Member</h1>
             </div>
             <div class="row g-4">
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
                         </div>
                         <h5 class="mb-0">Bathel</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
                         </div>
                         <h5 class="mb-0">Bathel</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
                         </div>
                         <h5 class="mb-0">Bathel</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
                         </div>
                         <h5 class="mb-0">Bathel</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary mx-1" href=""><i
                                     class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Team End -->


     <!-- Testimonial Start -->
     <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
         <div class="container">
             <div class="text-center">
                 <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                 <h1 class="mb-5">Our Clients Say!!!</h1>
             </div>
             <div class="owl-carousel testimonial-carousel">
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                     <p>“Bethel Gurkha Coffee Garden is more than just a coffee shop; it's a haven for coffee lovers and
                         those seeking a tranquil spot to unwind.”</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle"
                             src="{{ asset('frontend/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                     <p>“Bethel Team is more than just a place to get a great cup of coffee; it's an experience.”</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle"
                             src="{{ asset('frontend/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                     <p>“Whether you're looking for a place to catch up with friends, work, or simply relax, this coffee
                         garden is a perfect choice.”</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle"
                             src="{{ asset('frontend/img/testimonial-3.jpg') }}" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                     <p>“ I highly recommend it to anyone in the area and will definitely be returning soon.”</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle"
                             src="{{ asset('frontend/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Testimonial End -->
 @endsection

 @section('customJS')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach click event to each category link
            document.querySelectorAll('.category-link').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    let parentId = this.getAttribute('data-parent-id');
                    loadMenuItems(parentId);
                });
            });

            // Function to load menu items based on parent category ID
            function loadMenuItems(parentId) {
                fetch(`/menus/${parentId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear the content placeholder
                        let contentPlaceholder = document.getElementById('tab-content-placeholder');
                        contentPlaceholder.innerHTML = '';

                        // Populate with new content
                        data.forEach(menu => {
                            // console.log(menu.image.url)
                            let myImage = 'storage/' + menu.image.url + '/' + menu.image.saved_name;
                            console.log(menu);
                            // let menuHtml = `
                        //         <div class="col-lg-6">
                        //             <div class="d-flex align-items-center mt-3">
                        //                 <img class="flex-shrink-0 img-fluid rounded my-img-sh"
                        //                     src="${myImage}" alt="" style="width: 50px;">
                        //                 <div class="w-100 d-flex flex-column text-start ps-4">
                        //                     <h5 class="d-flex justify-content-between border-bottom pb-2">
                        //                         <span class="fs-6 fw-normal">${menu.title}</span>
                        //                         <span class="text-primary fs-6 fw-semibold">Rs. ${menu.price}</span>
                        //                         <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        //                         Order
                        //                         </button>
                        //                     </h5>
                        //                 </div>
                        //             </div>
                        //         </div>
                        //     `;


                            let menuHtml = `
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center mt-3">
                                        <img class="flex-shrink-0 img-fluid rounded my-img-sh"
                                            src="${myImage}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="fs-6 fw-normal">${menu.title}</span>
                                                <span class="text-primary fs-6 fw-semibold">Rs. ${menu.price}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            `;
                            contentPlaceholder.innerHTML += menuHtml;
                        });
                    })
                    .catch(error => console.error('Error fetching menu items:', error));
            }

            // Load the first category's menu items on page load
            let firstCategoryId = document.querySelector('.category-link').getAttribute('data-parent-id');
            loadMenuItems(firstCategoryId);
        });





        document.addEventListener('DOMContentLoaded', function() {
            // Get references to modal elements
            const exampleModal = document.getElementById('exampleModal');
            const quantityInput = document.getElementById('qty');
            const totalPriceElement = exampleModal.querySelector('.modal-body p');

            let currentPrice = 0; // To store the price of the selected menu item

            // When the modal is shown, update the title and price
            exampleModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Button that triggered the modal
                const menuTitle = button.getAttribute('data-title');
                currentPrice = parseFloat(button.getAttribute('data-price'));

                // Update modal title
                exampleModal.querySelector('.modal-title').textContent = `Order ${menuTitle}`;

                // Set the initial total price
                totalPriceElement.textContent = `Total Price: Rs. ${currentPrice}`;
                quantityInput.value = 1; // Set default quantity to 1
            });

            // Update the total price whenever the quantity changes
            quantityInput.addEventListener('input', function() {
                const quantity = parseInt(quantityInput.value) || 0; // Default to 0 if not a valid number
                const totalPrice = currentPrice * quantity;
                totalPriceElement.textContent = `Total Price: Rs. ${totalPrice.toFixed(2)}`;
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            const exampleModal = document.getElementById('exampleModal');
            const quantityInput = document.getElementById('qty');
            const totalPriceElement = exampleModal.querySelector('.modal-body p');
            const orderList = document.getElementById('order-list');

            let currentPrice = 0;
            let currentItemId = null;
            let currentTitle = '';

            let allOrders = [];


            // Object to track orders
            const orders = {};



            // Show modal with menu item details
            exampleModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                currentTitle = button.getAttribute('data-title');
                currentPrice = parseFloat(button.getAttribute('data-price'));
                currentItemId = button.closest('.col-lg-6').dataset.itemId;

                // Set modal title
                exampleModal.querySelector('.modal-title').textContent = `Order ${currentTitle}`;

                // Set initial values
                quantityInput.value = orders[currentItemId] ? orders[currentItemId].quantity : 1;
                totalPriceElement.textContent = `Total Price: Rs. ${quantityInput.value * currentPrice}`;
            });

            // Update total price based on quantity input
            quantityInput.addEventListener('input', function() {
                const quantity = parseInt(quantityInput.value) || 0;
                const totalPrice = currentPrice * quantity;
                totalPriceElement.textContent = `Total Price: Rs. ${totalPrice.toFixed(2)}`;
            });

            // Handle the "Save" button click in the modal
            const saveButton = exampleModal.querySelector('.btn-primary');
            saveButton.addEventListener('click', function() {
                const quantity = parseInt(quantityInput.value) || 0;

                if (quantity > 0) {
                    // Set the new quantity for the current item
                    orders[currentItemId] = {
                        title: currentTitle,
                        quantity: quantity,
                        price: currentPrice
                    };
                    updateOrderList();
                }

                // Close the modal
                bootstrap.Modal.getInstance(exampleModal).hide();
            });

            // Function to update the order list display
            function updateOrderList() {
                // orderList.innerHTML = ''; // Clear the current list

                Object.keys(orders).forEach(itemId => {
                    const order = orders[itemId];
                    allOrders.push(order);

                });

                allOrders.forEach((order, index) => {
                    console.log(allOrders);
                    const orderHtml = `
                <div class="order-item" id="order-${index}">
                    <span>${order.title} (x${order.quantity})</span>
                    <span>Total: Rs. ${order.quantity * order.price}</span>
                </div>
            `;

                    // Append new order or update existing one
                    let existingOrder = document.getElementById(`order-${index}`);
                    if (existingOrder) {
                        existingOrder.innerHTML = orderHtml;
                    } else {
                        orderList.innerHTML += orderHtml;
                    }
                });
            }
        });
    </script>
@endsection
