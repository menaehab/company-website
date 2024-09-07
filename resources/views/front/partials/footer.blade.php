<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{ $setting->address }}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{ $setting->phone }}</p>
                <p><i class="fa fa-envelope me-3"></i>{{ $setting->email }}</p>
                <div class="d-flex pt-2">
                    @if ($setting->twitter)
                        <a class="btn btn-outline-light btn-social" href="{{ $setting->twitter }}"><i
                                class="fab fa-twitter"></i></a>
                    @endif
                    @if ($setting->facebook)
                        <a class="btn btn-outline-light btn-social" href="{{ $setting->facebook }}"><i
                                class="fab fa-facebook-f"></i></a>
                    @endif
                    @if ($setting->youtube)
                        <a class="btn btn-outline-light btn-social" href="{{ $setting->youtube }}"><i
                                class="fab fa-youtube"></i></a>
                    @endif
                    @if ($setting->instagram)
                        <a class="btn btn-outline-light btn-social" href="{{ $setting->instagram }}"><i
                                class="fab fa-instagram"></i></a>
                    @endif
                    @if ($setting->linkedin)
                        <a class="btn btn-outline-light btn-social" href="{{ $setting->linkedin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Quick Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
        </div>
    </div>
</div>
