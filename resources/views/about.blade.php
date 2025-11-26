@extends('layouts.app')

@section('title', __('about.page_title') . ' - ' . config('restaurant.name'))
@section('meta_description', __('about.about_section.title'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.page_title') }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('about.breadcrumb_home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('about.breadcrumb_about') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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
                                <p>{{ __('about.about_section.customer_repeat_rate') }}</p>
                            </div>
                            <!-- Customer Rate Box End -->
                        </div>
                        <!-- About Image Box 1 End -->

                        <!-- About Image Box 3 Start -->
                        <div class="about-image-box-2">
                            <!-- Contact Circle Start -->
                            <div class="contact-us-circle">
                                <a href="{{ route('contact') }}"><img src="{{ asset('images/contact-us-circle.svg') }}" alt=""></a>
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
                            <h3 class="wow fadeInUp">{{ __('about.about_section.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.about_section.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('about.about_section.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Body List Start -->
                        <div class="about-body-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                @foreach(__('about.about_section.features') as $feature)
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
                                <p>{{ __('about.about_section.stats.experience') }}</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">10</span>K+</h2>
                                <p>{{ __('about.about_section.stats.customers') }}</p>
                            </div>
                            <!-- About Counter Item End -->

                            <!-- About Counter Item Start -->
                            <div class="about-counter-item">
                                <h2><span class="counter">98</span>%</h2>
                                <p>{{ __('about.about_section.stats.satisfaction') }}</p>
                            </div>
                            <!-- About Counter Item End -->
                        </div>
                        <!-- About Counter List End -->

                        <!-- About Button Start -->
                        <div class="about-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="{{ route('about') }}" class="btn-default">{{ __('about.about_section.button') }}</a>
                        </div>
                        <!-- About Button End -->
                    </div>
                    <!-- About us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section light-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Approach Content Start -->
                    <div class="approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('about.approach.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.approach.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('about.approach.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Approach Body Start -->
                        <div class="approach-body">
                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <h3>{{ __('about.approach.mission.title') }}</h3>
                                    <p>{{ __('about.approach.mission.description') }}</p>
                                </div>
                                <!-- Mission Vision Content End -->

                                <!-- Mission Vision List Start -->
                                <div class="mission-vision-list">
                                    <ul>
                                        @foreach(__('about.approach.mission.points') as $point)
                                            <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Mission Vision List End -->
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <h3>{{ __('about.approach.vision.title') }}</h3>
                                    <p>{{ __('about.approach.vision.description') }}</p>
                                </div>
                                <!-- Mission Vision Content End -->

                                <!-- Mission Vision List Start -->
                                <div class="mission-vision-list">
                                    <ul>
                                        @foreach(__('about.approach.vision.points') as $point)
                                            <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Mission Vision List End -->
                            </div>
                            <!-- Mission Vision Item End -->
                        </div>
                        <!-- Approach Body End -->
                    </div>
                    <!-- Approach Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Approach Image Start -->
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/approach-image.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Approach Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Best Food Section Start -->
    <div class="best-food bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Best Food Item Start -->
                    <div class="best-food-item">
                        <div class="best-food-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('about.best_food.item1.section_title') }}</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.best_food.item1.title') }}</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Best Food Button Start -->
                            <div class="best-food-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{ route('contact') }}">{{ __('about.best_food.item1.button') }}</a>
                            </div>
                            <!-- Best Food Button End -->
                        </div>
                        <div class="best-food-image">
                            <img src="{{ asset('images/best-food-img-1.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Best Food Item End -->
                </div>

                <div class="col-lg-6">
                    <!-- Best Food Item Start -->
                    <div class="best-food-item">
                        <div class="best-food-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('about.best_food.item2.section_title') }}</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.best_food.item2.title') }}</h2>
                            </div>
                            <!-- Section Title End -->

                             <!-- Best Food Button Start -->
                             <div class="best-food-btn wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{ route('contact') }}">{{ __('about.best_food.item2.button') }}</a>
                             </div>
                             <!-- Best Food Button End -->
                        </div>
                        <div class="best-food-image">
                            <img src="{{ asset('images/best-food-img-2.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Best Food Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Best Food Section End -->

    <!-- Test Tradition Section Start -->
    <div class="test-tradition dark-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Test Tradition Image Box Start -->
                    <div class="test-tradition-image-box">
                        <div class="test-tradition-image">
                            <figure class="image-anime">
                                <img src="{{ asset('images/test-tradition-image.jpg') }}" alt="">
                            </figure>
                        </div>

                        <!-- Test Tradition Cta Box Start -->
                        <div class="test-tradition-cta-box wow fadeInUp">
                            <div class="test-tradition-cta-header">
                                <h3>{{ __('about.taste_tradition.promo_title') }}</h3>
                            </div>
                            <div class="test-tradition-cta-body">
                                <!-- Review Images Start -->
                                <div class="review-images">
                                    @for($i = 1; $i <= 4; $i++)
                                        <div class="review-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/author-' . $i . '.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    @endfor
                                </div>
                                <!-- Review Images End -->

                                <!-- Test Tradition Cta Button Start -->
                                <div class="test-tradition-cta-btn">
                                    <a href="{{ route('contact') }}">{{ __('about.taste_tradition.promo_button') }}</a>
                                </div>
                                <!-- Test Tradition Cta Button End -->
                            </div>
                        </div>
                        <!-- Test Tradition Cta Box End -->
                    </div>
                    <!-- Test Tradition Image Box End -->
                </div>
                <div class="col-lg-6">
                    <!-- Test Tradition Content Start -->
                    <div class="test-tradition-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('about.taste_tradition.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.taste_tradition.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('about.taste_tradition.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Test Tradition Body Start -->
                        <div class="test-tradition-body wow fadeInUp" data-wow-delay="0.4s">
                            @foreach(__('about.taste_tradition.features') as $feature)
                                <!-- Test Tradition Body Item Start -->
                                <div class="test-tradition-body-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-test-tradition-body-' . $loop->iteration . '.svg') }}" alt="">
                                    </div>
                                    <div class="test-tradition-item-content">
                                        <h3>{{ $feature }}</h3>
                                    </div>
                                </div>
                                <!-- Test Tradition Body Item End -->
                            @endforeach
                        </div>
                        <!-- Test Tradition Body End -->

                        <!-- Test Tradition List Start -->
                        <div class="test-tradition-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                @foreach(__('about.taste_tradition.points') as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Test Tradition List End -->
                    </div>
                    <!-- Test Tradition Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Test Tradition Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">{{ __('about.team.section_title') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.team.title') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach(__('about.team.members') as $index => $member)
                    <div class="col-lg-3 col-md-6">
                        <!-- Team Member Item Start -->
                        <div class="team-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <a href="#" data-cursor-text="{{ __('about.team.view_text') }}">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/team-' . ($index + 1) . '.jpg') }}" alt="{{ $member['name'] }}">
                                    </figure>
                                </a>

                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="#">{{ $member['name'] }}</a></h3>
                                <p>{{ $member['position'] }}</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Team Member Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Call To Action Box Start -->
    <div class="cta-box bg-section dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">{{ __('about.cta.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.cta.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('about.cta.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Cta Button Start -->
                        <div class="cta-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">{{ __('about.cta.button_contact') }}</a>
                        
                        </div>
                        <!-- Cta Button End -->
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Cta Counter List Start -->
                    <div class="cta-counter-list">
                        @foreach(__('about.cta.stats') as $index => $stat)
                            <!-- CTA Counter Item Start -->
                            <div class="cta-counter-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-cta-counter-' . ($index + 1) . '.svg') }}" alt="">
                                </div>
                                <div class="cta-counter-content">
                                    <h2><span class="counter">{{ $stat['number'] }}</span>{{ $stat['suffix'] ?? '' }}+</h2>
                                    <p>{{ $stat['label'] }}</p>
                                </div>
                            </div>
                            <!-- CTA Counter Item End -->
                        @endforeach
                    </div>
                    <!-- Cta Counter List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Box End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.what_we_do.section_title') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.what_we_do.title') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>{{ __('about.what_we_do.description') }}</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('contact') }}" class="btn-default">{{ __('about.what_we_do.button') }}</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- What We List Start -->
                    <div class="what-we-list">
                        @foreach(__('about.what_we_do.items') as $index => $item)
                            <!-- What We Item Start -->
                            <div class="what-we-item">
                                <!-- What We Content Start -->
                                <div class="whay-we-content">
                                    <div class="what-we-header">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/icon-what-we-' . ($index + 1) . '.svg') }}" alt="">
                                        </div>
                                        <div class="what-we-btn">
                                            <a href="{{ route('contact') }}">
                                                <img src="{{ asset('images/arrow-' . ($index == 0 ? 'white' : 'accent') . '.svg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="what-we-body">
                                        <h2><span class="counter">{{ $item['number'] }}</span>{{ $item['suffix'] ?? '' }}+</h2>
                                        <p>{{ $item['description'] }}</p>
                                    </div>
                                </div>
                                <!-- What We Content End -->

                                <!-- What We Image Start -->
                                <div class="what-we-img">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('images/what-we-img-' . ($index + 1) . '.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- What We Image End -->
                            </div>
                            <!-- What We Item End -->
                        @endforeach
                    </div>
                    <!-- What We List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section dark-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Testimonials Image Start -->
                    <div class="testimonials-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/testimonials-image.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Testimonials Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Testimonial Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('about.testimonials.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.testimonials.title') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    @for($i = 0; $i < 4; $i++)
                                        <!-- Testimonial Slide Start -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('images/testimonial-quote.svg') }}" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>{{ __('about.testimonials.quote') }}</p>
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="author-content">
                                                        <h3>{{ __('about.testimonials.author_name') }}</h3>
                                                        <p>{{ __('about.testimonials.author_title') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Slide End -->
                                    @endfor
                                </div>
                                <div class="testimonial-pagination"></div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonial Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Reserve Table Section Start -->
    <div class="reserve-table bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">{{ __('about.reserve.section_title') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.reserve.title') }}</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Reserve Table Form Start -->
                    <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                        <form id="reserveForm" action="#" method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.name_label') }}</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('about.reserve.form.name_placeholder') }}" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.email_label') }}</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('about.reserve.form.email_placeholder') }}" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.phone_label') }}</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="{{ __('about.reserve.form.phone_placeholder') }}" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.guests_label') }}</label>
                                    <select name="number" class="form-control form-select" id="number" required>
                                        <option value="" disabled selected>{{ __('about.reserve.form.guests_placeholder') }}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5_more">5 & More</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.date_label') }}</label>
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">{{ __('about.reserve.form.time_label') }}</label>
                                    <input type="time" name="lname" class="form-control" id="time" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">{{ __('about.reserve.form.message_label') }}</label>
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="{{ __('about.reserve.form.message_placeholder') }}"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default"><span>{{ __('about.reserve.form.submit_button') }}</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Reserve Table Form End -->
                </div>

                <div class="col-lg-5">
                    <!-- Reserve Table Content Start -->
                    <div class="reserve-table-content wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p>{{ __('about.reserve.intro_text') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Reserve Table Info Start -->
                        <div class="reserve-table-info">
                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>{{ __('about.reserve.info.address_title') }}</h3>
                                <p>{{ __('about.reserve.info.address_text') }}</p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>{{ __('about.reserve.info.contact_title') }}</h3>
                                <p>{{ __('about.reserve.info.contact_phone') }}: <a href="tel:{{ config('restaurant.phone') }}">{{ config('restaurant.phone') }}</a></p>
                                <p>{{ __('about.reserve.info.contact_email') }}: <a href="mailto:{{ config('restaurant.email') }}">{{ config('restaurant.email') }}</a></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item reserve-table-time">
                                <h3>{{ __('about.reserve.info.hours_title') }}</h3>
                                <p>{{ __('about.reserve.info.hours_weekday') }} <span>{{ __('about.reserve.info.hours_weekday_time') }}</span></p>
                                <p>{{ __('about.reserve.info.hours_weekend') }} <span>{{ __('about.reserve.info.hours_weekend_time') }}</span></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>{{ __('about.reserve.info.social_title') }}</h3>
                                <ul>
                                    @if(config('restaurant.social.facebook'))
                                        <li><a href="{{ config('restaurant.social.facebook') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(config('restaurant.social.instagram'))
                                        <li><a href="{{ config('restaurant.social.instagram') }}"><i class="fa-brands fa-instagram"></i></a></li>
                                    @endif
                                    @if(config('restaurant.social.dribbble'))
                                        <li><a href="{{ config('restaurant.social.dribbble') }}"><i class="fa-brands fa-dribbble"></i></a></li>
                                    @endif
                                    @if(config('restaurant.social.linkedin'))
                                        <li><a href="{{ config('restaurant.social.linkedin') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Reserve Table Info Item End -->
                        </div>
                        <!-- Reserve Table Info End -->
                    </div>
                    <!-- Reserve Table Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Reserve Table Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Faqs Images Start -->
                    <div class="faqs-images">
                        <!-- Faqs Image Box Start -->
                        <div class="faq-img-box-1">
                            <div class="faq-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/faq-img-1.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="faq-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/faq-img-2.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Faqs Image Box End -->

                        <!-- Faqs Image Box Start -->
                        <div class="faq-img-box-2">
                            <div class="faq-img-2">
                                <figure class="image-anime">
                                    <img src="{{ asset('images/faq-img-3.jpg') }}" alt="">
                                </figure>
                            </div>

                            <!-- Faqs CTA Box Start -->
                            <div class="faq-cta-box wow fadeInUp">
                                <!-- Review Images Start -->
                                <div class="review-images">
                                    @for($i = 1; $i <= 4; $i++)
                                        <div class="review-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('images/author-' . $i . '.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    @endfor
                                    <div class="review-image add-more">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- Review Images End -->

                                <!-- Faq Cta Content Start -->
                                <div class="faq-cta-content">
                                    <h2>4.9 Star</h2>
                                    <p>{{ __('about.faqs.reviews_label') }}</p>
                                </div>
                                <!-- Faq Cta Content End -->
                            </div>
                            <!-- Faqs CTA Box End -->
                        </div>
                        <!-- Faqs Image Box End -->
                    </div>
                    <!-- Faqs Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('about.faqs.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.faqs.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('about.faqs.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            @foreach(__('about.faqs.questions') as $index => $faq)
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                    <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                        <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index + 1 }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index + 1 }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>{{ $faq['answer'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->
                            @endforeach
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->
@endsection

@push('scripts')
<script>
    // About page specific JavaScript
</script>
@endpush
