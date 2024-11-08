@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white text-center fw-bold">
                    <i class="bi bi-book-half me-2"></i>{{ __('Library Login') }}
                </div>

                <div class="card-body p-4" style="background: #f9f4ef;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning text-dark fw-bold">{{ __('Login') }}</button>
                        </div>

                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 500px;
    }
    .card {
        border-radius: 12px;
    }
    .card-header {
        font-family: 'Georgia', serif;
        border-bottom: 2px solid #6c757d;
    }
    .card-body {
        font-family: 'Times New Roman', serif;
    }
    .btn-warning {
        background-color: #f1c40f;
        border-color: #f1c40f;
    }
    .btn-warning:hover {
        background-color: #d4ac0d;
        border-color: #d4ac0d;
    }
    .form-label {
        font-weight: bold;
        color: #6c757d;
    }
    body {
        background-image: url('/path/to/your/library-background.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-blend-mode: lighten;
    }
</style>

<!-- Load Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection
