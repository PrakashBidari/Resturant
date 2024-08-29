{{-- <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>Bethel Gurkha Coffee Garden is more than just a coffee shop; it's a haven for coffee lovers and
                        those seeking a tranquil spot to unwind. Whether you're looking for a place to catch up with
                        friends, work, or simply relax, this coffee garden is a perfect choice.
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a target="_blank" href="https://www.facebook.com/bethalgurkhacoffeegarden/"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="https://www.facebook.com/bethalgurkhacoffeegarden/"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/bethelgurkhacoffeegarden/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    @if ($blogs->count())
                        @foreach ($blogs->take(2) as $blog)
                            <div class="block-21 mb-4 d-flex">
                                @if ($latestImage = $blog->image)
                                    <a class="blog-img mr-4"
                                        style="background-image: url( {{ Storage::url($latestImage->url . '/' . $latestImage->saved_name) }} "></a>
                                @endif
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="#">{{ strip_tags(Str::limit($blog->title, 30)) }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span
                                                    class="icon-calendar"></span>{{ $blog->created_at->format('M d, Y') }}</a>
                                        </div>
                                        <div><a href="#"><span class="icon-person"></span> {{ $blog->author }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>

            <div class="col-lg-3 col-md-3 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Hattiban, Lalitpur</span>
                            </li>
                            <li><a href="tel:9818175767"><span class="icon icon-phone"></span><span class="text">+977
                                        9818175767</span></a></li>
                            <li><a href="mailto:info@bethelteam.com"><span class="icon icon-envelope"></span><span
                                        class="text">info@bethelteam.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template
                    is made with <i class="icon-heart" aria-hidden="true"></i> by <a href=""
                        target="_blank">BitSolution</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer> --}}


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Reservation</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hattiban, Lalitpur</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+977 9818175767</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>	info@bethelteam.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/bethalgurkhacoffeegarden/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/bethalgurkhacoffeegarden/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/bethelgurkhacoffeegarden/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/bethelgurkhacoffeegarden/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                <p>Whether looking for a place to catch up with friends.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Bathel Team</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="">BitSolution Nepal</a>

                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
