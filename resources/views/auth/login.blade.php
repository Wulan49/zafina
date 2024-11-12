@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #f0f2f5;">
    <div class="row w-100 justify-content-center">
        <!-- Card Container -->
        <div class="col-md-10 col-lg-8">
            <div class="card d-flex flex-row shadow-lg" style="border-radius: 20px; overflow: hidden; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">

                <!-- Left Side (Illustration) -->
                <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center" style="background-color: #f5f7fa;">
                    <div>
                        <!-- Perbaikan path gambar menggunakan asset() -->
                        <img src="{{ asset('images/login.jpg') }}" alt="Secure" class="img-fluid">
                        <h2 class="text-primary text-center mt-4">Secure</h2>
                    </div>
                </div>

                <!-- Right Side (Login Form) -->
                <div class="col-md-6 p-5 d-flex align-items-center justify-content-center" style="background-color: #007bff;">
                    <div style="width: 100%; max-width: 400px;">
                        <h3 class="text-center text-white mb-4">{{ __('Welcome!') }}</h3>

                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0 rounded-start">
                                        <i class="fas fa-envelope text-muted"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your e-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0 rounded-start">
                                        <i class="fas fa-lock text-muted"></i>
                                    </span>
                                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Create password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Strength Meter -->
                            <div class="form-group mb-4">
                                <label for="password-strength" class="form-label text-light">Password strength</label>
                                <div id="password-strength" class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%; background-color: #ffc107;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-between mb-3">
                                <button type="submit" class="btn btn-light btn-lg" style="border-radius: 50px;">
                                    {{ __('Sign In') }}
                                </button>
                                <button type="button" class="btn btn-outline-warning btn-lg" style="border-radius: 50px;">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- End of Card -->
        </div>
    </div>
</div>
@endsection
