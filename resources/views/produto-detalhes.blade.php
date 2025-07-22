<x-eterna-layout>
    <!-- Breadcrumb -->
    <section class="py-3" style="margin-top: 100px; background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/" style="color: #e96b56;">Home</a></li>
                    <li class="breadcrumb-item"><a href="/portfolio" style="color: #e96b56;">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $produto['nome'] }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Detalhes do Produto -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Galeria de Imagens -->
                <div class="col-lg-6 mb-4">
                    <div class="product-gallery">
                        <div class="main-image mb-3">
                            <img src="{{ $produto['imagem'] }}" alt="{{ $produto['nome'] }}" class="img-fluid rounded shadow" id="mainImage" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                        @if(count($produto['galeria']) > 1)
                        <div class="thumbnail-images">
                            <div class="row">
                                @foreach($produto['galeria'] as $index => $imagem)
                                <div class="col-3 mb-2">
                                    <img src="{{ $imagem }}" alt="{{ $produto['nome'] }} {{ $index + 1 }}" 
                                         class="img-fluid rounded thumbnail-img {{ $index === 0 ? 'active' : '' }}" 
                                         style="width: 100%; height: 80px; object-fit: cover; cursor: pointer; border: 2px solid {{ $index === 0 ? '#e96b56' : 'transparent' }};"
                                         onclick="changeMainImage('{{ $imagem }}', this)">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Informações do Produto -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="mb-3">
                            <span class="badge px-3 py-2" style="background-color: #e96b56; color: #ffff;font-size: 0.9rem;">{{ $produto['tipo'] }}</span>
                            @if($produto['stock'])
                                <span class="badge bg-success px-3 py-2 ms-2" style="font-size: 0.9rem;">Em Stock</span>
                            @else
                                <span class="badge bg-danger px-3 py-2 ms-2" style="font-size: 0.9rem;">Esgotado</span>
                            @endif
                        </div>

                        <h1 class="display-5 fw-bold mb-3" style="color: #ffff;">{{ $produto['nome'] }}</h1>
                        
                        <div class="price mb-4">
                            <span class="h2 fw-bold" style="color: #e96b56;">€{{ number_format($produto['preco'], 2, ',', '.') }}</span>
                        </div>

                        <div class="description mb-4" style="color: #ffff;">
                            <p class="lead text">{{ $produto['descricao'] }}</p>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="action-buttons mb-5">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <a href="tel:+351263500310" class="btn btn-lg w-100" style="background-color: #e96b56; color: white; border: none;">
                                        <i class="bi bi-telephone-fill me-2"></i>Ligar Agora
                                    </a>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <a href="/suporte" class="btn btn-outline-primary btn-lg w-100">
                                        <i class="bi bi-chat-dots me-2"></i>Contactar
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <a href="https://wa.me/351263500310?text=Olá! Tenho interesse no produto: {{ $produto['nome'] }}" 
                                       target="_blank" class="btn btn-success btn-lg w-100">
                                        <i class="bi bi-whatsapp me-2"></i>WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Informações de Contacto -->
                        <div class="contact-info p-4 rounded" style="background-color: #f8f9fa; color: #000000">
                            <h6 class="fw-bold mb-3" style="color: #2c4964;">Informações de Contacto</h6>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <i class="bi bi-telephone-fill me-2" style="color: #e96b56;"></i>
                                    <strong>+351 263 500 310</strong>
                                </div>
                                <div class="col-12 mb-2">
                                    <i class="bi bi-envelope-fill me-2" style="color: #e96b56;"></i>
                                    <strong>contacto@lusogoldfish.pt</strong>
                                </div>
                                <div class="col-12">
                                    <i class="bi bi-instagram me-2" style="color: #e96b56;"></i>
                                    <strong>@lusogoldfishpt</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Características Técnicas -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4" style="color: #2c4964;">
                                <i class="bi bi-gear-fill me-2" style="color: #e96b56;"></i>Características Técnicas
                            </h4>
                            <div class="row">
                                @foreach($produto['caracteristicas'] as $caracteristica => $valor)
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                        <span class="fw-semibold" style="color: #2c4964;">{{ $caracteristica }}:</span>
                                        <span class="text-muted">{{ $valor }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4" style="color: #2c4964;">
                                <i class="bi bi-heart-fill me-2" style="color: #e96b56;"></i>Cuidados e Manutenção
                            </h4>
                            <ul class="list-unstyled">
                                @foreach($produto['cuidados'] as $cuidado)
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill me-3 mt-1" style="color: #e96b56; font-size: 1.1rem;"></i>
                                    <span>{{ $cuidado }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produtos Relacionados -->
    @if(count($relacionados) > 0)
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h3 class="text-center fw-bold" style="color: #2c4964;">Produtos Relacionados</h3>
                    <p class="text-center text-muted">Outros produtos da mesma categoria que podem interessar</p>
                </div>
            </div>
            <div class="row">
                @foreach(array_slice($relacionados, 0, 4) as $relacionado)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ $relacionado['imagem'] }}" class="card-img-top" alt="{{ $relacionado['nome'] }}" style="height: 200px; object-fit: cover;">
                            <div class="product-overlay">
                                <div class="text-center text-white">
                                    <i class="bi bi-eye-fill mb-2" style="font-size: 1.5rem;"></i>
                                    <p class="mb-0 small">Ver Detalhes</p>
                                </div>
                            </div>
                            <span class="badge position-absolute top-0 start-0 m-2" style="background-color: #e96b56;">{{ $relacionado['tipo'] }}</span>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="card-title mb-2" style="color: #2c4964;">{{ $relacionado['nome'] }}</h6>
                            <p class="card-text small text-muted mb-2">{{ Str::limit($relacionado['descricao'], 80) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: #e96b56;">€{{ number_format($relacionado['preco'], 2, ',', '.') }}</span>
                                <a href="/portfolio/{{ $relacionado['id'] }}" class="btn btn-sm" style="background-color: #e96b56; color: white;">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #e96b56 0%, #d35202 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-6 fw-bold mb-4">Interessado neste produto?</h2>
                    <p class="lead mb-4">Contacta-nos para mais informações, disponibilidade ou para fazer a tua encomenda!</p>
                    
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-3">
                            <a href="tel:+351263500310" class="btn btn-light btn-lg px-4 py-3" style="color: #e96b56; font-weight: 600;">
                                <i class="bi bi-telephone-fill me-2"></i>Ligar Agora
                            </a>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <a href="/suporte" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600;">
                                <i class="bi bi-chat-dots me-2"></i>Contactar
                            </a>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <a href="/portfolio" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600;">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CSS e JavaScript -->
    <style>
        .product-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
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
        
        .thumbnail-img {
            transition: all 0.3s ease;
        }
        
        .thumbnail-img:hover {
            transform: scale(1.05);
        }
        
        .thumbnail-img.active {
            border-color: #e96b56 !important;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            transition: transform 0.2s ease;
        }
        
        @media (max-width: 768px) {
            .display-5 {
                font-size: 2rem;
            }
            
            .display-6 {
                font-size: 1.75rem;
            }
        }
    </style>

    <script>
        function changeMainImage(imageSrc, thumbnail) {
            // Alterar imagem principal
            document.getElementById('mainImage').src = imageSrc;
            
            // Remover classe active de todas as thumbnails
            document.querySelectorAll('.thumbnail-img').forEach(img => {
                img.classList.remove('active');
                img.style.borderColor = 'transparent';
            });
            
            // Adicionar classe active à thumbnail clicada
            thumbnail.classList.add('active');
            thumbnail.style.borderColor = '#e96b56';
        }
        
        // Smooth scroll para âncoras
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</x-eterna-layout>