<x-eterna-layout>
    <!-- Estilos Personalizados -->
    <style>
        .support-section {
            background-color: #f8f9fa; /* Fundo claro para destacar */
            padding: 60px 0; /* Mais espaçamento vertical */
        }
        .form-label {
            color: rgb(211, 82, 2); /* Cor laranja para labels */
            font-weight: 600; /* Negrito leve */
        }
        .form-control {
            border-radius: 8px; /* Bordas mais suaves */
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05); /* Sombra sutil */
        }
        .form-control:focus {
            border-color: rgb(211, 82, 2); /* Cor de foco combinando com o tema */
            box-shadow: 0 0 5px rgba(211, 82, 2, 0.5); /* Efeito ao focar */
        }
        .btn-custom {
            background-color: rgb(211, 82, 2); /* Botão laranja */
            border: none;
            padding: 12px;
            font-weight: 500;
            transition: background-color 0.3s ease; /* Transição suave */
        }
        .btn-custom:hover {
            background-color: rgb(180, 70, 0); /* Tom mais escuro ao passar o mouse */
        }
        .shadow-custom {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra mais suave e moderna */
        }
    </style>

    <!-- Support Section -->
    <section id="support" class="support-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-down" data-aos-delay="100">
                <div class="col-lg-8">
                    <h2 class="text-danger fw-bold mb-3">Suporte ao Cliente</h2>
                    <p class="lead text-muted">Teve algum problema com a sua compra? Preencha o formulário abaixo e a nossa equipa entrará em contacto o mais rápido possível.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{ route('suporte.enviar') }}" method="POST" class="shadow-custom p-4 rounded bg-white">
                        @csrf <!-- Token CSRF do Laravel para segurança -->

                        <!-- Nome -->
                        <div class="mb-4">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Número do Pedido -->
                        <div class="mb-4">
                            <label for="orderNumber" class="form-label">Número do Pedido</label>
                            <input type="text" class="form-control" id="orderNumber" name="orderNumber" value="{{ old('orderNumber') }}" required>
                            @error('orderNumber')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Mensagem -->
                        <div class="mb-4">
                            <label for="message" class="form-label">Descreva o Problema</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Botão de Envio -->
                        <button type="submit" class="btn btn-custom w-100">Enviar Pedido de Suporte</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-eterna-layout>
