<x-guest-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - {{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos personalizados -->
        <style>
            /* Fundo azul sólido */
            body {
                background-color: #ffff; /* Azul base */
                background-image: url("eterna/img/texture.jpg"); /* Textura */
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
                    background-position: 100% 100%;
                }
            }

            /* Card de login */
            .login-card {
                border-radius: 15px;
                padding: 30px;
                background-color: #ffff; /* Azul base */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                width: 100%;
                max-width: 400px;
                text-align: center;
            }

            .login-card h3 {
                color: #007bff; /* Azul */
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

            .form-check-label {
                color: #333;
                font-size: 14px;
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
            <h3>Login</h3>
            <!-- Exibir status de sessão (se houver) -->
            <x-auth-session-status class="alert alert-info" :status="session('status')" />

            <!-- Formulário de login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Campo de Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autofocus>

                    <!-- Exibir erros de email -->
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Campo de Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required>

                    <!-- Exibir erros de password -->
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Lembrar-me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember_me" class="form-check-label">Lembrar-me</label>
                </div>

                <!-- Links de Ação -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Link para "Esqueceu-se da password?" -->
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                            Esqueceu-se da password?
                        </a>
                    @endif

                    <!-- Botão de envio do formulário -->
                    <button type="submit" class="btn btn-login">Entrar</button>
                </div>

                <!-- Link para criar uma conta -->
                <div class="text-center">
                    <p>Ainda não tem conta? <a href="{{ route('register') }}" class="text-decoration-none text-primary">Registe-se aqui</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Script adicional para melhorar a interação do login (exemplo)
        document.addEventListener("DOMContentLoaded", function() {
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");

            // Validação ao enviar o formulário (pode ser personalizada)
            document.querySelector("form").addEventListener("submit", function(event) {
                if (emailInput.value === "" || passwordInput.value === "") {
                    event.preventDefault();
                    alert("Por favor, preencha todos os campos.");
                }
            });
        });
    </script>
</x-guest-layout>
