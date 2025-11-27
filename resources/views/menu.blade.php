@extends('layouts.app')

@section('title', __('menu.page_title') . ' - ' . config('restaurant.name'))
@section('meta_description', __('menu.page_title'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('menu.page_title') }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    href="{{ route('welcome') }}">{{ __('menu.breadcrumb_home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('menu.breadcrumb_menu') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Menu Start -->
    <div class="page-menu bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <!-- Our Menu Tab Start -->
                        <div class="our-menu-tab wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Sidebar Our Menu Nav start -->
                            <div class="our-menu-tab-nav">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @php
                                        $menuImages = [
                                            'our-menu-image-1.png',
                                            'our-menu-image-2.png',
                                            'our-menu-image-3.png',
                                            'our-menu-image-4.png',
                                            'our-menu-image-5.png',
                                            'our-menu-image-6.png',
                                        ];
                                    @endphp
                                    @foreach ($categories as $index => $category)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                                id="tab-{{ $category->id }}" data-bs-toggle="tab"
                                                data-bs-target="#category-{{ $category->id }}" type="button" role="tab"
                                                aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                                <img src="{{ asset('images/icon-menu-tab-primary-' . (($index % 4) + 1) . '.svg') }}"
                                                    alt="">
                                                {{ $category->localized_name }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Sidebar Our Menu Nav End -->

                            <!-- Menu Box Start -->
                            <div class="tab-content" id="myTabContent">
                                @foreach ($categories as $index => $category)
                                    <!-- Category Tab Start -->
                                    <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                                        id="category-{{ $category->id }}" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <!-- Our Menu List Start -->
                                                <div class="our-menu-list">
                                                    @forelse($category->items as $item)
                                                        <!-- Our Menu Item Start -->
                                                        <div class="our-menu-item">
                                                            <!-- Our Menu Image Start -->
                                                            <div class="our-menu-image">
                                                                <figure>
                                                                    @if ($item->image)
                                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                                            alt="{{ $item->localized_name }}">
                                                                    @else
                                                                        <img src="{{ asset('images/' . $menuImages[$loop->index % 6]) }}"
                                                                            alt="{{ $item->localized_name }}">
                                                                    @endif
                                                                </figure>
                                                            </div>
                                                            <!-- Our Menu Image End -->

                                                            <!-- Menu Item Body Start -->
                                                            <div class="menu-item-body">
                                                                <!-- Menu Item Title Start -->
                                                                <div class="menu-item-title">
                                                                    <h3>{{ $item->localized_name }}</h3>
                                                                    @if ($loop->first)
                                                                        <span>{{ $item->formatted_price }}</span>
                                                                    @else
                                                                        <hr>
                                                                        <span>{{ $item->formatted_price }}</span>
                                                                    @endif
                                                                </div>
                                                                <!-- Menu Item Title End -->

                                                                <!-- Menu Item Content Start -->
                                                                <div class="menu-item-content">
                                                                    <p>{{ $item->localized_description }}</p>
                                                                </div>
                                                                <!-- Menu Item Content End -->
                                                            </div>
                                                            <!-- Menu Item Body End -->
                                                        </div>
                                                        <!-- Our Menu Item End -->
                                                    @empty
                                                        <!-- Empty State Start -->
                                                        <div class="text-center py-5">
                                                            <p class="text-muted">{{ __('menu.no_items') }}</p>
                                                        </div>
                                                        <!-- Empty State End -->
                                                    @endforelse
                                                </div>
                                                <!-- Our Menu List End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Category Tab End -->
                                @endforeach
                            </div>
                            <!-- Menu Box End -->
                        </div>
                        <!-- Our Menu Tab End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Section Footer Text Start -->
                        <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                            <p><span>Free</span>{{ __('menu.footer_text') }}
                                href="{{ route('menu') }}">{{ __('menu.footer_link') }}</a></p>
                        </div>
                        <!-- Section Footer Text End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Menu End -->

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
                            <h3 class="wow fadeInUp">{{ __('menu.testimonials.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('menu.testimonials.title') }}</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    @for ($i = 0; $i < 4; $i++)
                                        <!-- Testimonial Slide Start -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('images/testimonial-quote.svg') }}" alt="">
                                                </div>
                                                <div class="testimonial-content">
                                                    <p>{{ __('menu.testimonials.quote') }}</p>
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="author-content">
                                                        <h3>{{ __('menu.testimonials.author_name') }}</h3>
                                                        <p>{{ __('menu.testimonials.author_title') }}</p>
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
                                    @for ($i = 1; $i <= 4; $i++)
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
                                    <p>{{ __('menu.faqs.reviews_label') }}</p>
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
                            <h3 class="wow fadeInUp">{{ __('menu.faqs.section_title') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('menu.faqs.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('menu.faqs.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            @php
                                $questions = __('menu.faqs.questions');
                            @endphp
                            @if (is_array($questions))
                                @foreach ($questions as $index => $faq)
                                    <!-- FAQ Item Start -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                        <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                            <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index + 1 }}"
                                                aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $index + 1 }}">
                                                {{ $faq['question'] }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index + 1 }}"
                                            class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                <p>{{ $faq['answer'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ Item End -->
                                @endforeach
                            @endif
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
        // Menu page specific JavaScript if needed
    </script>
@endpush
