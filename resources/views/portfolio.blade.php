<x-eterna-layout>
    <!-- Hero Section -->
    <section class="py-5" style="margin-top: 100px; background: linear-gradient(135deg, #e96b56 0%, #d35202 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Portfolio de Produtos</h1>
                    <p class="lead fs-4">Descobre a nossa vasta gama de peixes ornamentais, equipamentos e acessórios para aquários</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtros de Categoria -->
    <section class="py-4" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <div class="btn-group flex-wrap" role="group">
                            <button type="button" class="btn btn-outline-primary active" data-filter="*">Todos</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".peixes">Peixes</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".filtros">Filtros</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".iluminacao">Iluminação</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".aquecedores">Aquecedores</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".bombas">Bombas</button>
                            <button type="button" class="btn btn-outline-primary" data-filter=".decoracao">Decoração</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-5" style="background-color: white;">
        <div class="container">
            <div class="row" id="portfolio-grid">
                
                @foreach($produtos as $produto)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 portfolio-item {{ $produto['categoria'] }}" data-aos="fade-up" data-aos-delay="100">
                    <a href="/portfolio/{{ $produto['id'] }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 product-card">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $produto['imagem'] }}" class="card-img-top" alt="{{ $produto['nome'] }}" style="height: 200px; object-fit: cover;">
                                <div class="product-overlay">
                                    <div class="text-center text-white">
                                        <i class="bi bi-eye-fill mb-2" style="font-size: 1.5rem;"></i>
                                        <p class="mb-0 small">Ver Detalhes</p>
                                    </div>
                                </div>
                                <span class="badge position-absolute top-0 start-0 m-2" style="background-color: {{ $produto['categoria'] === 'peixes' ? '#007bff' : ($produto['categoria'] === 'filtros' ? '#28a745' : ($produto['categoria'] === 'iluminacao' ? '#ffc107' : ($produto['categoria'] === 'aquecedores' ? '#dc3545' : ($produto['categoria'] === 'bombas' ? '#20c997' : '#6f42c1')))) }};">{{ $produto['tipo'] }}</span>
                            </div>
                            <div class="card-body p-3">
                                <h6 class="card-title mb-2" style="color: #1e3041;">{{ $produto['nome'] }}</h6>
                                <p class="card-text small text-muted mb-2">{{ Str::limit($produto['descricao'], 80) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold" style="color: #e96b56;">€{{ number_format($produto['preco'], 2, ',', '.') }}</span>
                                    <small class="text-muted">{{ $produto['stock'] ? 'Em stock' : 'Esgotado' }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Seção de Informações Adicionais -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-4" style="color: #2c4964;">Porquê Escolher os Nossos Produtos?</h3>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="mb-3">
                                        <i class="bi bi-shield-check" style="font-size: 3rem; color: #e96b56;"></i>
                                    </div>
                                    <h5 style="color: #2c4964;">Qualidade Garantida</h5>
                                    <p class="text-muted small">Todos os produtos são testados e certificados</p>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="mb-3">
                                        <i class="bi bi-truck" style="font-size: 3rem; color: #e96b56;"></i>
                                    </div>
                                    <h5 style="color: #2c4964;">Entrega Rápida</h5>
                                    <p class="text-muted small">Envio em 24-48h para todo o país</p>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="mb-3">
                                        <i class="bi bi-headset" style="font-size: 3rem; color: #e96b56;"></i>
                                    </div>
                                    <h5 style="color: #2c4964;">Suporte 24/7</h5>
                                    <p class="text-muted small">Apoio técnico especializado sempre disponível</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #e96b56 0%, #d35202 100%); color: rgb(219, 186, 186);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Interessado nos Nossos Produtos?</h2>
                    <p class="lead mb-4">Contacta-nos para mais informações, preços especiais ou para fazer a tua encomenda!</p>
                    
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-telephone-fill me-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <small class="d-block">Telefone</small>
                                    <strong>+351 263 500 310</strong>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-envelope-fill me-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <small class="d-block">Email</small>
                                    <strong>contacto@lusogoldfish.pt</strong>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-instagram me-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <small class="d-block">Instagram</small>
                                    <strong>@lusogoldfishpt</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="/suporte" class="btn btn-light btn-lg px-5 py-3 me-3" style="color: #e96b56; font-weight: 600;">
                            <i class="bi bi-chat-dots me-2"></i>Contactar Agora
                        </a>
                        <a href="/" class="btn btn-outline-light btn-lg px-5 py-3" style="font-weight: 600;">
                            <i class="bi bi-house me-2"></i>Voltar ao Início
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CSS e JavaScript para Filtros e Animações -->
    <style>
        .product-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(233, 107, 86, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .product-card:hover .product-overlay {
            opacity: 1;
        }
        
        .btn-outline-primary.active {
            background-color: #e96b56;
            border-color: #e96b56;
            color: white;
        }
        
        .btn-outline-primary:hover {
            background-color: #e96b56;
            border-color: #e96b56;
            color: white;
        }
        
        .portfolio-item {
            transition: all 0.3s ease;
        }
        
        .portfolio-item.hidden {
            opacity: 0;
            transform: scale(0.8);
            pointer-events: none;
        }
        
        @media (max-width: 768px) {
            .btn-group {
                flex-direction: column;
            }
            
            .btn-group .btn {
                margin-bottom: 0.5rem;
            }
            
            .display-4 {
                font-size: 2.5rem;
            }
            
            .display-5 {
                font-size: 2rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filtro de produtos
            const filterButtons = document.querySelectorAll('[data-filter]');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Filter items
                    portfolioItems.forEach(item => {
                        if (filter === '*' || item.classList.contains(filter.substring(1))) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.classList.remove('hidden');
                            }, 10);
                        } else {
                            item.classList.add('hidden');
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</x-eterna-layout>
