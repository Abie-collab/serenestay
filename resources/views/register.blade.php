<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join SereneStay Club | Luxury Registration</title>
    <meta name="description" content="Register an account with AURA Resort to secure booking records, track points, and receive special offers.">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <main class="auth-wrapper">
        <div class="auth-card" style="max-width: 550px;">
            <!-- Branding -->
            <div class="text-center mb-4">
                <a href="index.html" class="navbar-brand fs-2 fw-bold text-dark text-decoration-none">Serene<span style="color: var(--primary-color);">Stay</span></a>
                <p class="text-muted small mt-2">Become a member of the SereneStay Club today for premium benefits.</p>
            </div>

            <!-- Registration Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row g-2 mb-3">
                    <div class="col-6">
                        <label for="reg_first" class="form-label text-muted small fw-bold">First Name</label>
                        <input type="text" name="name" id="reg_first" class="form-control" placeholder="John" required>
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="reg_last" class="form-label text-muted small fw-bold">Last Name</label>
                        <input type="text" name="lname" id="reg_last" class="form-control" placeholder="Doe" required>
                         @error('lname')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="reg_email" class="form-label text-muted small fw-bold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="reg_email" class="form-control border-start-0" placeholder="john.doe@example.com" required>
                         @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="reg_phone" class="form-label text-muted small fw-bold">Phone Number</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-phone"></i></span>
                        <input type="tel" name="phone" id="reg_phone" class="form-control border-start-0" placeholder="+1 (555) 019-2834" required>
                         @error('phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-6">
                        <label for="reg_pass" class="form-label text-muted small fw-bold">Password</label>
                        <input type="password" name="password" id="reg_pass" class="form-control" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                         @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="reg_confirm" class="form-label text-muted small fw-bold">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="reg_confirm" class="form-control" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                    </div>
                </div>

                <!-- Terms and privacy policy -->
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="reg_agree" required>
                    <label class="form-check-label text-muted small" for="reg_agree">I agree to the membership <a href="#" class="text-primary text-decoration-none">Terms</a> and <a href="#" class="text-primary text-decoration-none">Privacy Policy</a>.</label>
                </div>

                <button type="submit" class="btn btn-luxury w-100 py-3 mb-3">Create Account</button>
            </form>

            <!-- Login link trigger -->
            <div class="text-center mt-3">
                <span class="text-muted small">Already a member? <a href="{{route('login')}}" class="text-primary text-decoration-none fw-bold">Sign In here</a></span>
            </div>

            <div class="text-center mt-4">
                <a href="index.blade.php" class="text-muted small text-decoration-none"><i class="fa-solid fa-arrow-left-long me-2"></i>Back to Home</a>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
