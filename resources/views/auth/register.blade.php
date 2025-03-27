<x-guest-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register - {{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos personalizados -->
        <style>
            /* Fundo idêntico ao login */
            body {
                background-color: #ffff;
                background-image: url("eterna/img/texture.jpg");
                animation: moveBackground 20s linear infinite;
                color: #fff;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                font-family: 'Arial', sans-serif;
                overflow: hidden;
            }

            /* Animação do background */
            @keyframes moveBackground {
                0% {
                    background-position: 0 0;
                }
                100% {
                    background-position: 60% 60%;
                }
            }

            /* Card de registro */
            .login-card {
                border-radius: 15px;
                padding: 30px;
                background-color: #ffff;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 400px;
                text-align: center;
            }

            .login-card h3 {
                color: #007bff;
                font-weight: bold;
                margin-bottom: 20px;
                font-size: 24px;
            }

            .form-label {
                font-weight: bold;
                color: #333;
                display: block;
                text-align: left;
                margin-bottom: 5px;
            }

            .form-control {
                border-radius: 8px;
                border: 1px solid #ddd;
                padding: 12px;
                margin-bottom: 15px;
                width: 100%;
                font-size: 14px;
            }

            .form-control:focus {
                border-color: #007bff;
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            }

            .btn-login {
                background-color: #007bff;
                border-color: #007bff;
                transition: background-color 0.3s ease;
                width: 100%;
                padding: 12px;
                font-weight: bold;
                font-size: 16px;
                border-radius: 8px;
                color: #fff;
            }

            .btn-login:hover {
                background-color: #0056b3;
                border-color: #004085;
            }

            .text-primary {
                color: #007bff !important;
            }

            .text-decoration-none {
                text-decoration: none;
            }

            .invalid-feedback {
                font-size: 0.875rem;
                color: #dc3545;
                text-align: left;
            }

            .text-center a {
                color: #007bff;
                font-size: 14px;
            }

            .text-center a:hover {
                text-decoration: underline;
            }

            .d-flex {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .mb-3 {
                margin-bottom: 1rem;
            }

            .mt-3 {
                margin-top: 1rem;
            }
        </style>
    </head>

    <div class="container">
        <div class="login-card">
            <h3>Criar Nova Conta</h3>

            <!-- Formulário de registro -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input id="name" class="form-control @error('name') is-invalid @enderror"
                           type="text" name="name" value="{{ old('name') }}" required autofocus>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                           type="email" name="email" value="{{ old('email') }}" required>

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                           type="password" name="password" required>

                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Password</label>
                    <input id="password_confirmation" class="form-control"
                           type="password" name="password_confirmation" required>
                </div>

                <!-- Botão de registro -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-login">Registar</button>
                </div>

                <!-- Link para login -->
                <div class="text-center">
                    <p>Já tem uma conta? <a href="{{ route('login') }}" class="text-decoration-none text-primary">Faça login aqui</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Validação de password
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("password_confirmation");

            form.addEventListener("submit", function(e) {
                if (password.value !== confirmPassword.value) {
                    e.preventDefault();
                    alert("As passwords não coincidem!");
                    confirmPassword.focus();
                }
            });
        });
    </script>
</x-guest-layout>
