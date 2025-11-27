@extends('layouts.admin')

@section('title', 'მთავარი')
@section('page-title', 'მთავარი გვერდი')

@section('content')
    <div class="row g-4">
        <!-- Restaurant Info Card -->
        <div class="col-12">
            <div class="restaurant-hero">
                <div class="hero-content">
                    <h1 class="display-5 fw-bold mb-3">{{ config('restaurant.name') }}</h1>
                    <p class="lead text-muted mb-4">{{ config('restaurant.footer_description') }}</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('categories.index') }}" class="btn btn-primary">
                            <i class="bi bi-tag me-2"></i>კატეგორიები
                        </a>
                        {{-- <a href="{{ route('menu.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-journal-text me-2"></i>მენიუ
                    </a> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="info-icon bg-primary bg-opacity-10 text-primary">
                    <i class="bi bi-telephone"></i>
                </div>
                <h6 class="mb-2">ტელეფონი</h6>
                <p class="mb-0 text-muted">{{ config('restaurant.phone') }}</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="info-icon bg-success bg-opacity-10 text-success">
                    <i class="bi bi-envelope"></i>
                </div>
                <h6 class="mb-2">ელ-ფოსტა</h6>
                <p class="mb-0 text-muted">{{ config('restaurant.email') }}</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="info-icon bg-warning bg-opacity-10 text-warning">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <h6 class="mb-2">მისამართი</h6>
                <p class="mb-0 text-muted">{{ config('restaurant.address') }}</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="info-icon bg-info bg-opacity-10 text-info">
                    <i class="bi bi-clock"></i>
                </div>
                <h6 class="mb-2">სამუშაო საათები</h6>
                <p class="mb-0 text-muted small">{{ config('restaurant.working_hours.weekdays.hours') }}</p>
            </div>
        </div>

        <!-- Working Hours Card -->
        <div class="col-lg-6">
            <div class="schedule-card">
                <h5 class="mb-4">
                    <i class="bi bi-calendar-check me-2"></i>
                    სამუშაო განრიგი
                </h5>
                @foreach (config('restaurant.working_hours') as $schedule)
                    <div class="schedule-item">
                        <span class="schedule-day">{{ $schedule['days'] }}</span>
                        <span class="schedule-hours">{{ $schedule['hours'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Social Media Card -->
        <div class="col-lg-6">
            <div class="schedule-card">
                <h5 class="mb-4">
                    <i class="bi bi-share me-2"></i>
                    სოციალური ქსელები
                </h5>
                <div class="social-links">
                    @if (config('restaurant.social.facebook') !== '#')
                        <a href="{{ config('restaurant.social.facebook') }}" target="_blank" class="social-link facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                    @endif

                    @if (config('restaurant.social.instagram') !== '#')
                        <a href="{{ config('restaurant.social.instagram') }}" target="_blank"
                            class="social-link instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                    @endif

                    @if (config('restaurant.social.twitter') !== '#')
                        <a href="{{ config('restaurant.social.twitter') }}" target="_blank" class="social-link twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                    @endif

                    @if (config('restaurant.social.pinterest') !== '#')
                        <a href="{{ config('restaurant.social.pinterest') }}" target="_blank"
                            class="social-link pinterest">
                            <i class="bi bi-pinterest"></i>
                        </a>
                    @endif

                    @if (config('restaurant.social.dribbble') !== '#')
                        <a href="{{ config('restaurant.social.dribbble') }}" target="_blank" class="social-link dribbble">
                            <i class="bi bi-dribbble"></i>
                        </a>
                    @endif

                    @if (config('restaurant.social.linkedin') !== '#')
                        <a href="{{ config('restaurant.social.linkedin') }}" target="_blank" class="social-link linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="col-12">
            <div class="stats-row">
                <div class="stat-item">
                    {{-- <div class="stat-value">{{ \App\Models\Category::count() }}</div> --}}
                    <div class="stat-label">კატეგორიები</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    {{-- <div class="stat-value">{{ \App\Models\Menu::count() }}</div> --}}
                    <div class="stat-label">მენიუს აითემები</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    {{-- <div class="stat-value">{{ \App\Models\Menu::where('is_available', true)->count() }}</div> --}}
                    <div class="stat-label">ხელმისაწვდომი</div>
                </div>
            </div>
        </div>
    </div>
@endsection
