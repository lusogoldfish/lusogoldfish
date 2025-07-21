<x-eterna-layout>
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 40vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white">
                    <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Nosso Portfolio</h1>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
                        Conheça alguns dos nossos projetos mais marcantes em aquarismo e cuidados com peixes ornamentais
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-5">
        <div class="container">
            <!-- Filtros -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary active" data-filter="*">Todos</button>
                        <button type="button" class="btn btn-outline-primary" data-filter=".aquarios">Aquários</button>
                        <button type="button" class="btn btn-outline-primary" data-filter=".equipamentos">Equipamentos</button>
                        <button type="button" class="btn btn-outline-primary" data-filter=".manutencao">Manutenção</button>
                        <button type="button" class="btn btn-outline-primary" data-filter=".projetos">Projetos Completos</button>
                    </div>
                </div>
            </div>

            <!-- Grid de Projetos -->
            <div class="row g-4" id="portfolio-grid">
                @foreach($projetos as $projeto)
                <div class="col-lg-4 col-md-6 portfolio-item {{ strtolower(str_replace(' ', '-', $projeto['categoria'])) }}" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card h-100 shadow-sm portfolio-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset($projeto['imagem']) }}" class="card-img-top" alt="{{ $projeto['titulo'] }}" style="height: 250px; object-fit: cover;">
                            <div class="portfolio-overlay">
                                <div class="portfolio-overlay-content">
                                    <a href="{{ route('portfolio.show', $projeto['id']) }}" class="btn btn-light btn-sm">
                                        <i class="bi bi-eye"></i> Ver Detalhes
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="badge bg-primary">{{ $projeto['categoria'] }}</span>
                                <small class="text-muted">{{ date('d/m/Y', strtotime($projeto['data'])) }}</small>
                            </div>
                            <h5 class="card-title">{{ $projeto['titulo'] }}</h5>
                            <p class="card-text text-muted">{{ $projeto['descricao'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="bi bi-person"></i> {{ $projeto['cliente'] }}
                                </small>
                                <a href="{{ route('portfolio.show', $projeto['id']) }}" class="btn btn-outline-primary btn-sm">
                                    Ver Mais <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="mb-4">Quer um projeto personalizado?</h3>
                    <p class="lead mb-4">Entre em contacto connosco e vamos criar o aquário dos seus sonhos!</p>
                    <a href="/suporte" class="btn btn-primary btn-lg">Solicitar Orçamento</a>
                </div>
            </div>
        </div>
    </section>

    <style>
    .portfolio-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .btn-group .btn {
        margin: 0 2px;
    }
    </style>

    <script>
    // Filtro do portfolio
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('[data-filter]');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filter === '*' || item.classList.contains(filter.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>
</x-eterna-layout>