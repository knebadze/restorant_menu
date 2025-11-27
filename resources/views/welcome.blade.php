@extends('layouts.app')

@section('title', __('common.home') . ' - ' . config('restaurant.name'))
@section('meta_description', __('home.hero.title'))

@section('content')
    <!-- Hero Section Start -->
    <div class="hero dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <video autoplay muted loop id="myvideo">
                <source src="{{ asset('videos/seabud-video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('home.hero.subtitle') }}</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.hero.title') }}</h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">{{ __('common.get_started') }}</a>
                            <a href="{{ route('menu') }}" class="btn-default btn-dark">{{ __('common.explore_menu') }}</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-5">
                    <!-- Working Hours Item Start -->
                    <div class="working-hours-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Working Hours Header Start -->
                        <div class="working-hours-header">
                            <h3>{{ __('common.working_hours') }}</h3>
                            <img src="{{ asset('images/icon-clock-white.svg') }}" alt="">
                        </div>
                        <!-- Working Hours Header End -->

                        <!-- Working Hours Body Start -->
                        <div class="working-hours-body">
                            <ul>
                                @foreach(config('restaurant.working_hours') as $schedule)
                                    <li>{{ __('common.' . strtolower(str_replace([' ', '-'], '_', $schedule['days'])), ['default' => $schedule['days']]) }} <span>{{ $schedule['hours'] }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Working Hours Body End -->
                    </div>
                    <!-- Working Hours Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About us Section Start -->
    <div class="about-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image Box 1 Start -->
                        <div class="about-image-box-1">
                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/about-us-image-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->

                            <!-- Customer Rate Box Start -->
                            <div class="customer-rate-box">
                                <h2><span class="counter">95</span>%</h2>
                                <p>{{ __('home.customer_rate.title') }}</p>
                            </div>
                            <!-- Customer Rate Box End -->
                        </div>
                        <!-- About Image Box 1 End -->

                        <!-- About Image Box 3 Start -->
                        <div class="about-image-box-2">
                            <!-- Contact Circle Start -->
                            <div class="contact-us-circle">
                                <a href="{{ route('contact') }}">
                                    <img src="{{ asset('images/contact-us-circle.svg') }}" alt="">
                                </a>
                            </div>
                            <!-- Contact Circle End -->

                            <!-- About Image Start -->
                            <div class="about-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/about-us-image-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Image End -->
                        </div>
                        <!-- About Image Box 3 End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('home.about.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.about.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('home.about.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Body List Start -->
                        <div class="about-body-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                @foreach(__('home.about.features') as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- About Body List End -->

                        <!-- About Counter List Start -->
                        <div class="about-counter-list">
                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">25</span>+</h2>
                                <p>{{ __('home.about.stats.experience') }}</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">10</span>K+</h2>
                                <p>{{ __('home.about.stats.customers') }}</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">98</span>%</h2>
                                <p>{{ __('home.about.stats.satisfaction') }}</p>
                            </div>
                            <!-- About Counter Item End -->
                        </div>
                        <!-- About Counter List End -->

                        <!-- About Button Start -->
                        <div class="about-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('about') }}" class="btn-default">{{ __('common.more_about') }}</a>
                        </div>
                        <!-- About Button End -->
                    </div>
                    <!-- About us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- Our History Section Start -->
    <div class="our-history bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">{{ __('home.history.section_title') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.history.title') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box">
                        @foreach(__('home.history.timeline') as $year => $description)
                            <!-- History Item Start -->
                            <div class="history-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                                <div class="history-item-content">
                                    <h2>{{ $year }}</h2>
                                    <p>{{ $description }}</p>
                                </div>
                                <div class="history-item-image">
                                    <figure>
                                        <img src="{{ asset('images/history-image-' . ($loop->index + 1) . '.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- History Item End -->
                        @endforeach
                    </div>
                    <!-- Our History Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our History Section End -->

    <!-- CTA Section Start -->
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ __('home.cta.title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.cta.subtitle') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('home.cta.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Cta Button Start -->
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">{{ __('common.contact_now') }}</a>

                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Cta Counter List Start -->
                    <div class="cta-counter-list">
                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-cta-counter-1.svg') }}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">85</span>+</h2>
                                <p>{{ __('home.cta.stats.dishes') }}</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-cta-counter-2.svg') }}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">4.9</span>+</h2>
                                <p>{{ __('home.cta.stats.rating') }}</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-cta-counter-3.svg') }}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">35</span>k+</h2>
                                <p>{{ __('home.cta.stats.guests') }}</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->

                        <!-- CTA Counter Item Start -->
                        <div class="cta-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-cta-counter-4.svg') }}" alt="">
                            </div>
                            <div class="cta-counter-content">
                                <h2><span class="counter">25</span>+</h2>
                                <p>{{ __('home.cta.stats.suppliers') }}</p>
                            </div>
                        </div>
                        <!-- CTA Counter Item End -->
                    </div>
                    <!-- Cta Counter List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

@endsection

@push('scripts')
<script>
    // Page-specific JavaScript
</script>
@endpush
