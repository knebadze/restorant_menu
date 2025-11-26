@extends('layouts.app')

@section('title', __('contact.page_title') . ' - ' . config('restaurant.name'))
@section('meta_description', __('contact.contact_section.title'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ __('contact.page_title') }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('contact.breadcrumb_home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('contact.breadcrumb_contact') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <div class="contact-us-img">
                            <figure class="image-anime">
                                <img src="{{ asset('images/contact-us-image.jpg') }}" alt="{{ __('contact.page_title') }}">
                            </figure>
                        </div>

                        <!-- Opening Hours Item Start -->
                        <div class="opening-hours-item wow fadeInUp">
                            <h3>{{ __('contact.contact_section.opening_hours_title') }}</h3>
                            <ul>
                                @foreach(__('contact.contact_section.opening_hours') as $hours)
                                    <li>{{ $hours }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Opening Hours Item End -->
                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('contact.contact_section.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('contact.contact_section.description') }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-us-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="contact-form wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="{{ __('contact.form.first_name') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="{{ __('contact.form.last_name') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('contact.form.email') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="{{ __('contact.form.phone') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="{{ __('contact.form.message') }}"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>{{ __('contact.form.submit') }}</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Info Box Start -->
    <div class="contact-info-box bg-section light-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-phone.svg') }}" alt="{{ __('contact.info.contact_us.title') }}">
                            </div>
                            <div class="contact-info-content">
                                <h3>{{ __('contact.info.contact_us.title') }}</h3>
                                <p><a href="tel:{{ str_replace(['(', ')', ' ', '-'], '', __('contact.info.contact_us.phone1')) }}">{{ __('contact.info.contact_us.phone1') }}</a></p>
                                <p><a href="tel:{{ str_replace(['(', ')', ' ', '-'], '', __('contact.info.contact_us.phone2')) }}">{{ __('contact.info.contact_us.phone2') }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-mail.svg') }}" alt="{{ __('contact.info.email_us.title') }}">
                            </div>
                            <div class="contact-info-content">
                                <h3>{{ __('contact.info.email_us.title') }}</h3>
                                <p><a href="mailto:{{ __('contact.info.email_us.email1') }}">{{ __('contact.info.email_us.email1') }}</a></p>
                                <p><a href="mailto:{{ __('contact.info.email_us.email2') }}">{{ __('contact.info.email_us.email2') }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-location.svg') }}" alt="{{ __('contact.info.address.title') }}">
                            </div>
                            <div class="contact-info-content">
                                <h3>{{ __('contact.info.address.title') }}</h3>
                                <p>{{ __('contact.info.address.text') }}</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Box End -->

    <!-- Google Map Section Start -->
    <div class="google-map bg-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection

@push('scripts')
<script>
    // Contact page specific JavaScript
</script>
@endpush
