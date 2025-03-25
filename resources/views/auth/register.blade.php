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

            /* CAIXA DE REGISTRO AMPLIADA */
            .auth-card {
                border-radius: 15px;
                padding: 40px 50px; /* Padding aumentado */
                background-color: #ffff;
                box-shadow: 0 4px 25px rgba(0, 0, 0, 0.25); /* Sombra mais intensa */
                width: 100%;
                max-width: 480px; /* Largura aumentada */
                text-align: center;
                margin: auto;
            }

            /* Título maior */
            .auth-card h3 {
                color: #007bff;
                font-weight: bold;
                margin-bottom: 25px;
                font-size: 26px;
            }

            /* Formulário com mais espaço */
            .form-label {
                font-weight: bold;
                color: #333;
                display: block;
                text-align: left;
                margin-bottom: 8px;
                font-size: 15px;
            }

            .form-control {
                border-radius: 10px; /* Bordas mais arredondadas */
                border: 1px solid #ddd;
                padding: 13px 15px; /* Inputs maiores */
                margin-bottom: 18px;
                width: 100%;
                font-size: 15px;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                border-color: #007bff;
                box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
            }

            /* Botão maior */
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

            /* Elementos de apoio */
            .login-link {
                font-size: 14px;
                color: #6c757d;
                margin-top: 20px;
                display: block;
                text-align: center;
            }

            .login-link a {
                color: #007bff;
                text-decoration: none;
                font-weight: 500;
            }

            .login-link a:hover {
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

            /* Ajuste para telas pequenas */
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
        <h3>Criar Nova Conta</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="form-label">Nome Completo</label>
                <input id="name" class="form-control @error('name') is-invalid @enderror"
                       type="text" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control @error('email') is-invalid @enderror"
                       type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="form-label">Senha</label>
                <input id="password" class="form-control @error('password') is-invalid @enderror"
                       type="password" name="password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                <input id="password_confirmation" class="form-control"
                       type="password" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn-auth">Registrar-se</button>

            <div class="login-link">
                Já possui uma conta? <a href="{{ route('login') }}">Acesse aqui</a>
            </div>
        </form>
    </div>

    <!-- Validação JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("password_confirmation");

            form.addEventListener("submit", function(e) {
                if (password.value !== confirmPassword.value) {
                    e.preventDefault();
                    alert("As senhas não coincidem!");
                    confirmPassword.focus();
                }
            });

            // Melhoria: Adiciona classe quando o input tem valor
            document.querySelectorAll('.form-control').forEach(input => {
                input.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        this.classList.add('has-value');
                    } else {
                        this.classList.remove('has-value');
                    }
                });
            });
        });
    </script>
</x-guest-layout>
