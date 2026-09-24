<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen - Spark Admin Premium Bootstrap 5 Admin Dashboard Template</title>

    <!-- SEO Optimization -->
    <meta name="description" content="Login Screen - Spark Admin Premium Bootstrap 5 Admin Dashboard Template">
    <meta name="author" content="Spark Admin Team">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Local Third-Party Libraries (100% Offline Compatible) -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Main Design System & Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>

    <!-- ==========================================
         START: Authentication Container & Login Card
         ========================================== -->
    <div class="login-wrapper">
        <!-- Glowing background shapes for modern visual appearance -->
        <div class="login-bg-shape login-bg-shape-1"></div>
        <div class="login-bg-shape login-bg-shape-2"></div>

        <!-- Main centered login card -->
        <div class="login-card">

          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; margin-bottom: 25px;">
                <!-- Logo Sekolah -->
                  <img src="{{ asset('assets/images/sakola.png') }}" alt="Logo SMA Cintawana" style="width: 70px; height: 70px; object-fit: contain; margin-bottom: 10px;">
                 <!-- Teks Nama Sekolah -->
                  <a href="#" class="login-brand text-decoration-none" style="font-weight: 700; font-size: 20px; color: #18392b;">
                      SMA CINTAWANA
                </a>
        </div>

            <!-- Login Form (Diubah ke POST dan mengarah ke route login Laravel) -->
            <form action="{{ route('admin.login') }}" method="POST" id="loginForm" class="needs-validation" novalidate>
                @csrf

                <!-- Email Input Group -->
                <div class="login-form-group">
                    <label for="email" class="login-form-label">Email</label>
                    <div class="login-input-group">
                        <i class="bi bi-envelope input-icon"></i>
                        <!-- Ditambahkan name="email" dan value untuk mempertahankan input jika gagal -->
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="login-input" placeholder="" required>
                    </div>
                </div>

                <!-- Password Input Group -->
                <div class="login-form-group">
                    <label for="password" class="login-form-label">Kata Sandi</label>
                    <div class="login-input-group">
                        <i class="bi bi-shield-lock input-icon"></i>
                        <!-- Ditambahkan name="password" -->
                        <input type="password" id="password" name="password" class="login-input login-input-password" placeholder="" required>
                        <button type="button" class="password-toggle-btn" id="toggle-password" aria-label="Show password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="login-options">
                    <label class="custom-control-label">
                        <input type="checkbox" name="remember" class="custom-checkbox-input" id="rememberMe">
                        <span>Ingat Saya</span>
                    </label>
                </div>

                <button type="submit" class="btn-login" id="btn-submit">
                    <span>Masuk</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/auth.js') }}"></script>
</body>
</html>
