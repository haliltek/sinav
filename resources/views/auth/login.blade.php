<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('auth.login.title') }} - {{ config('app.name') }}</title>
    
    <link href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/auth.css') }}" rel="stylesheet">

    @if(($settings['ext_recaptcha_enable'] ?? '0') === '1')
        @push('scripts')
            <script src="{{ asset('assets/js/recaptcha-loader.js') }}"></script>
        @endpush
    @endif
</head>
<body>

<div class="auth-wrapper">
    
    <div class="auth-brand">
        <div class="brand-content">
            <a href="/" class="logo-area">
                @if(!empty($settings['app_logo_dark']))
                    <img src="{{ Storage::url($settings['app_logo_dark']) }}" alt="{{ $settings['app_name'] ?? config('app.name') }}" class="auth-logo-img">
                @elseif(!empty($settings['app_logo_light']))
                    <img src="{{ Storage::url($settings['app_logo_light']) }}" alt="{{ $settings['app_name'] ?? config('app.name') }}" class="auth-logo-img">
                @else
                    <i class="fa-solid fa-layer-group"></i> {{ config('app.name') }}
                @endif
            </a>
            <div class="logo-tagline">{{ __('auth.login.tagline') }}</div>
            
            <h1 class="brand-headline">{{ __('auth.login.headline') }}</h1>
            <p class="brand-sub">{{ __('auth.login.brand_sub') }}</p>

            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-bolt"></i></div>
                    {{ __('auth.login.features.instant') }}
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    {{ __('auth.login.features.security') }}
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    {{ __('auth.login.features.analytics') }}
                </div>
            </div>
        </div>
    </div>

    <div class="auth-form">
        <div class="form-wrapper">
            
            <h2 class="page-title">{{ __('auth.login.welcome') }}</h2>
            <p class="page-sub">{{ __('auth.login.welcome_sub') }}</p>

            <!-- Quick Demo Login Block -->
            <style>
                .demo-login-card {
                    border: 1px dashed #cbd5e1;
                    border-radius: 12px;
                    padding: 16px;
                    background-color: #f8fafc;
                    margin-bottom: 24px;
                }
                .demo-login-header {
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    font-size: 0.75rem;
                    font-weight: 600;
                    color: #475569;
                    text-transform: uppercase;
                    margin-bottom: 12px;
                }
                .demo-login-header i {
                    color: #eab308;
                }
                .demo-login-buttons {
                    display: flex;
                    gap: 10px;
                }
                .demo-btn {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 8px;
                    padding: 10px;
                    border: none;
                    border-radius: 8px;
                    color: #ffffff;
                    font-weight: 600;
                    font-size: 0.85rem;
                    cursor: pointer;
                    transition: all 0.2s ease-in-out;
                }
                .demo-btn i {
                    font-size: 1.2rem;
                }
                .btn-admin {
                    background-color: #ef4444;
                }
                .btn-admin:hover {
                    background-color: #dc2626;
                    transform: translateY(-1px);
                }
                .btn-teacher {
                    background-color: #6366f1;
                }
                .btn-teacher:hover {
                    background-color: #4f46e5;
                    transform: translateY(-1px);
                }
                .btn-student {
                    background-color: #10b981;
                }
                .btn-student:hover {
                    background-color: #059669;
                    transform: translateY(-1px);
                }
            </style>

            <div class="demo-login-card">
                <div class="demo-login-header">
                    <i class="fa-solid fa-bolt"></i>
                    <span>{{ app()->getLocale() == 'tr' ? 'HIZLI DEMO GİRİŞİ' : 'QUICK DEMO LOGIN' }}</span>
                </div>
                <div class="demo-login-buttons">
                    <button type="button" class="demo-btn btn-admin" onclick="fillAndSubmit('admin@sc.com')">
                        <i class="fa-solid fa-user-shield"></i>
                        <span>{{ app()->getLocale() == 'tr' ? 'Yönetici' : 'Admin' }}</span>
                    </button>
                    <button type="button" class="demo-btn btn-teacher" onclick="fillAndSubmit('ogretmen@sc.com')">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>{{ app()->getLocale() == 'tr' ? 'Öğretmen' : 'Teacher' }}</span>
                    </button>
                    <button type="button" class="demo-btn btn-student" onclick="fillAndSubmit('ogrenci@sc.com')">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>{{ app()->getLocale() == 'tr' ? 'Öğrenci' : 'Student' }}</span>
                    </button>
                </div>
            </div>

            <script>
                function fillAndSubmit(email) {
                    document.getElementById('email').value = email;
                    document.getElementById('password').value = '123456';
                    document.getElementById('loginForm').submit();
                }
            </script>

            @if ($errors->any())
                <div class="alert-error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form id="loginForm" action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="input-group">

                    <label class="label">{{ __('auth.email_label') }}</label>
                    <input type="email" id="email" name="email" class="input" placeholder="name@company.com" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="input-group">
                    <label class="label">{{ __('auth.password_label') }}</label>
                    <input type="password" id="password" name="password" class="input" placeholder="••••••••" required>
                </div>

                <div class="form-actions">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" class="checkbox-input"> 
                        {{ __('auth.remember_me') }}
                    </label>
                    <a href="{{ route('password.request') }}" class="link">{{ __('auth.forgot_password') }}</a>
                </div>

                @if(($settings['ext_recaptcha_enable'] ?? '0') === '1')
                    <div class="input-group mt-3">
                        <div class="g-recaptcha" data-sitekey="{{ $settings['ext_recaptcha_site_key'] }}"></div>
                    </div>
                @elseif(($settings['ext_custom_captcha_enable'] ?? '0') === '1')
                    <div class="input-group mt-3">
                        <label class="label">{{ __('auth.login.captcha_label') }}</label>
                        <div class="captcha-row">
                            <img src="{{ captcha_src('flat') }}" 
                                 id="captchaImage"
                                 alt="Captcha" 
                                 class="captcha-img"
                                 data-refresh-url="{{ captcha_src('flat') }}"
                                 title="{{ __('auth.login.captcha_help') }}">
                            
                            <input type="text" name="captcha" class="input captcha-input" placeholder="{{ __('auth.login.captcha_placeholder') }}" required>
                        </div>
                        <small class="captcha-hint">{{ __('auth.login.captcha_help') }}</small>
                    </div>
                @endif

                <button type="submit" class="btn-primary mt-3">{{ __('auth.login.submit') }}</button>
            </form>

            @php
                $googleEnabled = ($settings['social_google_enable'] ?? '0') === '1';
                $facebookEnabled = ($settings['social_facebook_enable'] ?? '0') === '1';
            @endphp

            @if($googleEnabled || $facebookEnabled)
                <div class="divider"><span>{{ __('auth.login.or_continue') }}</span></div>

                <div class="social-grid">
                    @if($googleEnabled)
                        <a href="{{ route('social.login', 'google') }}" class="btn-social">
                            <i class="fa-brands fa-google text-danger"></i> Google
                        </a>
                    @endif
                    
                    @if($facebookEnabled)
                        <a href="{{ route('social.login', 'facebook') }}" class="btn-social">
                            <i class="fa-brands fa-facebook text-primary"></i> Facebook
                        </a>
                    @endif
                </div>
            @endif

            <div class="auth-footer">
                {{ __('auth.login.no_account') }} 
                <a href="{{ route('register') }}" class="link">{{ __('auth.login.create_account') }}</a>
            </div>

            <div class="security-badge">
                <i class="fa-solid fa-lock"></i> {{ __('auth.login.secure_badge') }}
            </div>

        </div>
    </div>

</div>

<script src="{{ asset('assets/js/auth-login.js') }}"></script>
@stack('scripts')

</body>
</html>