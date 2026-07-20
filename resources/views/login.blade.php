<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Sign In | SereneStay</title>
    <meta name="description" content="Log in to your SereneStay account to check bookings, upgrade loyalty levels, and edit preferences.">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <main class="auth-wrapper">
        <div class="auth-card">
            <!-- Branding -->
            <div class="text-center mb-4">
                <a href="index.html" class="navbar-brand fs-2 fw-bold text-dark text-decoration-none">Serene<span style="color: var(--primary-color);">Stay</span></a>
                <p class="text-muted small mt-2">Sign in to unlock exclusive luxury travel rewards.</p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="login_email" class="form-label text-muted small fw-bold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="login_email" class="form-control border-start-0" placeholder="john.doe@example.com" required>
                        @error("email")
                          <p class="alert alert-warning">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label for="login_password" class="form-label text-muted small fw-bold">Password</label>
                        <a href="#" class="small text-muted text-decoration-none">Forgot Password?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="login_password" class="form-control border-start-0" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                          @error("password")
                          <p class="alert alert-warning">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <!-- Remember me -->
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label text-muted small" for="remember_me">Remember me on this device</label>
                </div>

                <button type="submit" class="btn btn-luxury w-100 py-3 mb-4">Sign In</button>
            </form>

            <!-- Social Logins Divider -->
            <!-- <div class="position-relative text-center my-4">
                <hr class="text-muted">
                <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">or continue with</span>
            </div> -->

            <!-- Social buttons -->
            <!-- <div class="row g-2 mb-4">
                <div class="col-6">
                    <a href="#" class="btn btn-outline-light text-dark border w-100 py-2 d-flex align-items-center justify-content-center gap-2 small">
                        <i class="fa-brands fa-google text-danger"></i> Google
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" class="btn btn-outline-light text-dark border w-100 py-2 d-flex align-items-center justify-content-center gap-2 small">
                        <i class="fa-brands fa-apple text-dark"></i> Apple
                    </a>
                </div>
            </div> -->

            <!-- Registration trigger link -->
            <div class="text-center mt-3">
                <span class="text-muted small">New to SereneStay? <a href="{{ route('register') }}" class="text-primary text-decoration-none fw-bold">Join Club</a></span>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="text-muted small text-decoration-none">
                    <i class="fa-solid fa-arrow-left-long me-2"></i>Back to Home
                </a>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
