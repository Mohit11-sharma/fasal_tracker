@extends('layouts.header.header')

@section('content')
    {{-- <div class="container py-5">
    <div class="card p-4 border-light shadow-sm text-center">
        <div>
            <div class="mb-4 text-lime empty-state-icon">
                <i class="bi bi-file-earmark-fill"></i>
            </div>

            <h3 class="mb-2">Login Page Coming Soon</h3>
        </div>
    </div>
</div> --}}
    <div class="login-wrapper-new">
        <div class="login-bg-shape login-bg-shape-1"></div>
        <div class="login-bg-shape login-bg-shape-2"></div>
        <div class="login-card">
            <a href="index.html" class="login-brand text-decoration-none">
                <span>Login</span>
            </a>
            <p class="login-subtitle">Please sign in to access your dashboard</p>
            <form action="index.html" method="GET" id="loginForm" class="needs-validation" novalidate>
                <div class="login-form-group">
                    <label for="email" class="login-form-label">Farmer ID</label>
                    <div class="login-input-group">
                        <i class="bi bi-person-vcard input-icon"></i>
                        <input type="text" id="email" class="login-input" placeholder="Enter Your Farmer ID"
                            required>
                    </div>
                </div>
                <button type="submit" class="btn-login" id="btn-submit">
                    <span>Send OTP</span>
                    <i class="bi bi-arrow-right"></i>
                </button>

            </form>
            <p class="login-footer-text mt-3">
                Don't have an account? <a href="{{ route('register') }}" id="link-register">Register Now</a>
            </p>

        </div>
    </div>
@endsection
