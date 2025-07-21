<x-eterna-layout>
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); min-height: 40vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white">
                    <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">{{ $projeto['titulo'] }}</h1>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
                        {{ $projeto['categoria'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalhes do Projeto -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4">
                        <img src="{{ asset($projeto['imagem']) }}" class="card-img-top" alt="{{ $projeto['titulo'] }}" style="height: 400px; object-fit: cover;">
                    </div>
                    
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Sobre o Projeto</h4>
                            <p class="card-text">{{ $projeto['detalhes'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Especificações</h5>
                        </div>
                        <div class="card-body">
                            @foreach($projeto['especificacoes'] as $spec)
                            <p class="mb-2"><i class="bi bi-check-circle text-success"></i> {{ $spec }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="card shadow-sm bg-light">
                        <div class="card-body text-center">
                            <h5 class="card-title">Interessado?</h5>
                            <p class="card-text">Entre em contacto para um projeto similar!</p>
                            <a href="/suporte" class="btn btn-primary">Contactar-nos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Voltar ao Portfolio -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="{{ route('portfolio') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Voltar ao Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-eterna-layout>