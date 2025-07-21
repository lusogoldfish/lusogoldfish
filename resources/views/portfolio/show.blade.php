<x-eterna-layout>
    <!-- Hero Section -->
    <section class="py-5" style="margin-top: 100px; background: linear-gradient(135deg, #e96b56 0%, #d35202 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">{{ $portfolio['titulo'] }}</h1>
                    <p class="lead fs-4">{{ $portfolio['descricao'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Galeria de Imagens -->
                <div class="col-lg-8 mb-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-0">
                            <!-- Imagem Principal -->
                            <div class="mb-4">
                                <img src="{{ asset($portfolio['imagem']) }}" class="img-fluid w-100 rounded-top" alt="{{ $portfolio['titulo'] }}" style="height: 400px; object-fit: cover;">
                            </div>
                            
                            <!-- Galeria Adicional -->
                            @if(isset($portfolio['galeria']) && count($portfolio['galeria']) > 1)
                            <div class="px-4 pb-4">
                                <h5 class="mb-3" style="color: #d35202;">Galeria de Imagens</h5>
                                <div class="row">
                                    @foreach($portfolio['galeria'] as $imagem)
                                    <div class="col-md-4 mb-3">
                                        <img src="{{ asset($imagem) }}" class="img-fluid rounded shadow-sm gallery-img" alt="Galeria" style="height: 150px; width: 100%; object-fit: cover; cursor: pointer;">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Informações do Projeto -->
                <div class="col-lg-4">
                    <!-- Informações Básicas -->
                    <div class="card shadow-lg border-0 mb-4">
                        <div class="card-header text-center" style="background: linear-gradient(135deg, #e96b56, #d35202); color: white;">
                            <h5 class="mb-0">Informações do Projeto</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <strong style="color: #d35202;">Cliente:</strong>
                                <p class="mb-1">{{ $portfolio['cliente'] }}</p>
                            </div>
                            <div class="mb-3">
                                <strong style="color: #d35202;">Data:</strong>
                                <p class="mb-1">{{ date('d/m/Y', strtotime($portfolio['data'])) }}</p>
                            </div>
                            <div class="mb-3">
                                <strong style="color: #d35202;">Categoria:</strong>
                                <span class="badge" style="background-color: #e96b56;">{{ $portfolio['categoria'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Especificações Técnicas -->
                    @if(isset($portfolio['especificacoes']))
                    <div class="card shadow-lg border-0 mb-4">
                        <div class="card-header text-center" style="background: linear-gradient(135deg, #e96b56, #d35202); color: white;">
                            <h5 class="mb-0">Especificações Técnicas</h5>
                        </div>
                        <div class="card-body">
                            @foreach($portfolio['especificacoes'] as $spec => $valor)
                            <div class="mb-2">
                                <strong style="color: #d35202;">{{ $spec }}:</strong>
                                <span class="text-muted">{{ $valor }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Lista de Peixes -->
                    @if(isset($portfolio['peixes']))
                    <div class="card shadow-lg border-0">
                        <div class="card-header text-center" style="background: linear-gradient(135deg, #e96b56, #d35202); color: white;">
                            <h5 class="mb-0">Peixes e Habitantes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                @foreach($portfolio['peixes'] as $peixe)
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill me-2" style="color: #e96b56;"></i>
                                    {{ $peixe }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Descrição Detalhada -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card shadow-lg border-0">
                        <div class="card-header text-center" style="background: linear-gradient(135deg, #e96b56, #d35202); color: white;">
                            <h5 class="mb-0">Detalhes do Projeto</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="lead text-muted">{{ $portfolio['detalhes'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navegação -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Voltar ao Portfolio
                        </a>
                        <a href="/suporte" class="btn" style="background-color: #e96b56; color: white;">
                            <i class="bi bi-chat-dots me-2"></i>Solicitar Orçamento
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projetos Relacionados -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold" style="color: #d35202;">Outros Projetos</h2>
                    <p class="lead text-muted">Veja outros trabalhos que realizámos</p>
                </div>
            </div>
            <div class="row">
                <!-- Aqui você pode adicionar outros projetos relacionados -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow border-0">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-1.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title" style="color: #d35202;">Aquário Tropical</h6>
                            <p class="card-text text-muted small">Projeto de aquário tropical com plantas naturais.</p>
                            <a href="{{ route('portfolio.show', 1) }}" class="btn btn-sm" style="background-color: #e96b56; color: white;">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow border-0">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-2.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title" style="color: #d35202;">Aquário Marinho</h6>
                            <p class="card-text text-muted small">Aquário marinho com corais e peixes tropicais.</p>
                            <a href="{{ route('portfolio.show', 2) }}" class="btn btn-sm" style="background-color: #e96b56; color: white;">Ver Projeto</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow border-0">
                        <img src="{{ asset('eterna/img/portfolio/portfolio-3.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h6 class="card-title" style="color: #d35202;">Aquário Goldfish</h6>
                            <p class="card-text text-muted small">Aquário especializado para goldfish clássicos.</p>
                            <a href="{{ route('portfolio.show', 3) }}" class="btn btn-sm" style="background-color: #e96b56; color: white;">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #d35202 0%, #e96b56 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Quer um projeto similar?</h2>
                    <p class="lead mb-4">Entre em contacto connosco e vamos criar algo único para si!</p>
                    <div class="row justify-content-center">
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
                            <a href="/suporte" class="btn btn-light btn-lg px-4 py-2" style="color: #d35202; font-weight: 600;">
                                <i class="bi bi-chat-dots me-2"></i>Contactar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para Galeria -->
    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $portfolio['titulo'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <img id="modalImage" src="" class="img-fluid w-100" alt="Galeria">
                </div>
            </div>
        </div>
    </div>

    <!-- CSS e JavaScript -->
    <style>
        .gallery-img:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            transition: transform 0.2s ease;
        }
        
        @media (max-width: 768px) {
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
            // Funcionalidade para abrir imagens da galeria em modal
            const galleryImages = document.querySelectorAll('.gallery-img');
            const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
            const modalImage = document.getElementById('modalImage');
            
            galleryImages.forEach(img => {
                img.addEventListener('click', function() {
                    modalImage.src = this.src;
                    modal.show();
                });
            });
        });
    </script>
</x-eterna-layout>