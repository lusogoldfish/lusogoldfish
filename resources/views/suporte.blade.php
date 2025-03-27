<x-eterna-layout>

    <style>
        label{
            color: rgb(211, 82, 2);
        }

    </style>
    <!-- Support Section -->
    <section id="support" class="support section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-down" data-aos-delay="100">
                    <h2 class="text-danger fw-bold">Suporte ao Cliente</h2>
                    <p class="lead">Teve algum problema com a sua compra? Preencha o formulário abaixo e entraremos em contacto o mais rápido possível.</p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <form action="/enviar-suporte" method="POST" class="shadow p-4 rounded bg-light">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="orderNumber" class="form-label">Número do Pedido</label>
                            <input type="text" class="form-control" id="orderNumber" name="orderNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Descreva o problema</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Enviar Pedido de Suporte</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-eterna-layout>
