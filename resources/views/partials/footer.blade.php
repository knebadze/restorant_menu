<!-- Main Footer Start -->
<footer class="main-footer bg-section dark-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{ asset('images/footer-logo.svg') }}" alt="">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>{{ config('restaurant.footer_description', __('common.footer_desc')) }}</p>
                    </div>
                    <!-- About Footer Content End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <h3>{{ __('common.follow_socials') }}:</h3>
                        <ul>
                            <li><a href="{{ config('restaurant.social.pinterest', '#') }}"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="{{ config('restaurant.social.twitter', '#') }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="{{ config('restaurant.social.instagram', '#') }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ config('restaurant.social.facebook', '#') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-2 col-md-3">
                <!-- Footer Links start -->
                <div class="footer-links">
                    <h3>{{ __('common.our_services') }}</h3>
                    <ul>
                        <li><a href="#">{{ __('common.private_events') }}</a></li>
                        <li><a href="#">{{ __('common.catering_services') }}</a></li>
                        <li><a href="#">{{ __('common.dine_in_experience') }}</a></li>
                        <li><a href="#">{{ __('common.online_reservations') }}</a></li>
                        <li><a href="#">{{ __('common.entertainment_nights') }}</a></li>
                    </ul>
                </div>
                <!-- Footer Links end -->
            </div>

            <div class="col-lg-3 col-md-4">
                <!-- Footer Links start -->
                <div class="footer-links">
                    <!-- Footer Contact List Start -->
                    <div class="footer-contact-list">
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <h3>{{ __('common.our_location') }}</h3>
                            <p>{{ config('restaurant.address', '2972 Westheimer Rd. Santa Ana, Illinois 85486') }}</p>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <h3>{{ __('common.get_in_touch') }}</h3>
                            <p><a href="mailto:{{ config('restaurant.email') }}">{{ config('restaurant.email', 'info@domainname.com') }}</a></p>
                            <p><a href="tel:{{ config('restaurant.phone') }}">{{ config('restaurant.phone', '+(123) 456-7890') }}</a></p>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Contact List End -->
                </div>
                <!-- Footer Links end -->
            </div>

            <div class="col-lg-3 col-md-5">
                <!-- Footer Links start -->
                <div class="footer-links">
                    <h3>{{ __('common.subscribe_newsletter') }}</h3>
                    <p>{{ __('common.newsletter_text') }}</p>
                    <!-- Footer NewsLetter Form Start -->
                    {{-- <div class="footer-newsletter-form">
                        <form id="newslettersForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="mail" placeholder="{{ __('common.email_address') }} *" required>
                                <button type="submit" class="newsletter-btn">
                                    <img src="{{ asset('images/arrow-accent.svg') }}" alt="">
                                </button>
                            </div>
                        </form>
                    </div> --}}
                    <!-- Footer NewsLetter Form End -->
                </div>
                <!-- Footer Links end -->
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Start -->
                <div class="footer-copyright">
                    <!-- Footer Top Button Start -->
                    <div class="footer-top-button">
                        <a href="#top">
                            <img src="{{ asset('images/arrow-white.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Footer Top Button End -->

                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>{{ __('common.copyright', ['year' => date('Y')]) }}</p>
                    </div>
                    <!-- Footer Copyright Text End -->

                    <!-- Footer Menu Start -->
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">{{ __('common.home') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('common.about') }}</a></li>
                            <li><a href="{{ route('menu') }}">{{ __('common.menu') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('common.contact') }}</a></li>
                        </ul>
                    </div>
                    <!-- Footer Menu End -->
                </div>
                <!-- Footer Copyright End -->
            </div>
        </div>
    </div>
</footer>
<!-- Main Footer End -->
