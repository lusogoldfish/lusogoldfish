<x-guest-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recuperar Senha - {{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos personalizados -->
        <style>
            /* Estilo consistente com login/registro */
            body {
                background-color: #ffff;
                background-image: url("eterna/img/texture.jpg");
                animation: moveBackground 20s linear infinite;
                color: #fff;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                padding: 20px;
                font-family: 'Arial', sans-serif;
            }

            @keyframes moveBackground {
                0% { background-position: 0 0; }
                100% { background-position: 60% 60%; }
            }

            .auth-card {
                border-radius: 15px;
                padding: 40px 50px;
                background-color: #ffff;
                box-shadow: 0 4px 25px rgba(0, 0, 0, 0.25);
                width: 100%;
                max-width: 480px;
                text-align: center;
                margin: auto;
            }

            .auth-card h3 {
                color: #007bff;
                font-weight: bold;
                margin-bottom: 20px;
                font-size: 26px;
            }

            .auth-card .description {
                color: #555;
                font-size: 15px;
                margin-bottom: 25px;
                line-height: 1.5;
            }

            .form-label {
                font-weight: bold;
                color: #333;
                display: block;
                text-align: left;
                margin-bottom: 8px;
                font-size: 15px;
            }

            .form-control {
                border-radius: 10px;
                border: 1px solid #ddd;
                padding: 13px 15px;
                margin-bottom: 18px;
                width: 100%;
                font-size: 15px;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                border-color: #007bff;
                box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
            }

            .btn-auth {
                background-color: #007bff;
                border: none;
                transition: all 0.3s ease;
                width: 100%;
                padding: 14px;
                font-weight: bold;
                font-size: 16px;
                border-radius: 10px;
                color: #fff;
                cursor: pointer;
                margin-top: 15px;
                box-shadow: 0 2px 10px rgba(0, 123, 255, 0.3);
            }

            .btn-auth:hover {
                background-color: #0069d9;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0, 123, 255, 0.4);
            }

            .back-to-login {
                font-size: 14px;
                color: #6c757d;
                margin-top: 20px;
                display: block;
                text-align: center;
            }

            .back-to-login a {
                color: #007bff;
                text-decoration: none;
                font-weight: 500;
            }

            .back-to-login a:hover {
                text-decoration: underline;
            }

            .invalid-feedback {
                font-size: 13px;
                color: #dc3545;
                text-align: left;
                margin-top: -12px;
                margin-bottom: 12px;
                display: block;
            }

            .status-message {
                font-size: 14px;
                color: #28a745;
                margin-bottom: 20px;
                padding: 10px;
                background-color: rgba(40, 167, 69, 0.1);
                border-radius: 8px;
            }

            @media (max-width: 576px) {
                .auth-card {
                    padding: 30px;
                    max-width: 100%;
                }

                .auth-card h3 {
                    font-size: 24px;
                }

                .form-control {
                    padding: 12px;
                }
            }
        </style>
    </head>

    <div class="auth-card">
        <h3>Recuperar Senha</h3>

        <p class="description">
            Esqueceu sua senha? Sem problemas. Informe seu endereço de email e nós enviaremos um link para redefinição de senha.
        </p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="status-message">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror"
                       type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-auth">
                Enviar Link de Redefinição
            </button>

            <div class="back-to-login">
                <a href="{{ route('login') }}">Voltar para o login</a>
            </div>
        </form>
    </div>

    <!-- Validação JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const emailInput = document.getElementById("email");

            // Foco automático no campo de email
            if (emailInput.value === '') {
                emailInput.focus();
            }

            // Validação básica do formulário
            document.querySelector("form").addEventListener("submit", function(e) {
                if (emailInput.value.trim() === '') {
                    e.preventDefault();
                    alert("Por favor, informe seu email!");
                    emailInput.focus();
                }
            });
        });
    </script>
</x-guest-layout>
