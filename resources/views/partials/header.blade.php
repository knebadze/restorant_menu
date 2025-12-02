<!-- Header Start -->
<header class="main-header">
    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li>
                                <a href="tel:{{ config('restaurant.phone') }}">
                                    <img src="{{ asset('images/icon-phone-accent.svg') }}" alt="">
                                    <span>{{ __('common.phone') }}:
                                    </span>{{ config('restaurant.phone', '+380 63 073 3434') }}
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{ config('restaurant.email') }}">
                                    <img src="{{ asset('images/icon-mail-accent.svg') }}" alt="">
                                    <span>{{ __('common.email') }}:
                                    </span>{{ config('restaurant.email', 'info@domainname.com') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-md-3">
                    <!-- Topbar Social Links & Language Switcher Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="{{ config('restaurant.social.instagram', '#') }}"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ config('restaurant.social.facebook', '#') }}"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{ config('restaurant.social.dribbble', '#') }}"><i
                                        class="fa-brands fa-dribbble"></i></a></li>
                            <li class="language-switcher">
                                <a href="{{ route('locale.switch', 'en') }}"
                                    class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
                                <span>|</span>
                                <a href="{{ route('locale.switch', 'uk') }}"
                                    class="{{ app()->getLocale() == 'uk' ? 'active' : '' }}">UA</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links & Language Switcher End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="{{ asset('images/logo_site_w.png') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item {{ request()->routeIs('welcome') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('welcome') }}">{{ __('common.home') }}</a>
                            </li>

                            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('about') }}">{{ __('common.about') }}</a>
                            </li>

                            <li class="nav-item {{ request()->routeIs('menu') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('menu') }}">{{ __('common.menu') }}</a>
                            </li>

                            {{-- <li class="nav-item {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('blog.index') }}">{{ __('common.blog') }}</a>
                            </li> --}}

                            {{-- <li class="nav-item submenu">
                                <a class="nav-link" href="#">{{ __('common.pages') }}</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('team') }}">{{ __('common.our_team') }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('testimonials') }}">{{ __('common.testimonials') }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery.images') }}">{{ __('common.image_gallery') }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery.videos') }}">{{ __('common.video_gallery') }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">{{ __('common.faqs') }}</a></li>
                                </ul>
                            </li> --}}

                            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">{{ __('common.contact') }}</a>
                            </li>

                        </ul>
                    </div>

                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
