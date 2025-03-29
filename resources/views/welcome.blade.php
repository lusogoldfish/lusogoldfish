<x-eterna-layout>

    <!-- Hero Section -->
    <section id="hero" class="hero section">


        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="eterna/img/hero-carousel/hero-carousel-1.jpg" alt="">
                <div class="carousel-container">
                    <h2>Bem vindo ao <span>LusoGoldFish</span></h2>
                    <p>Peixes Ornamentais de Qualidade para o Seu Aquário! <br>Aqui na LusoGoldFish, oferecemos uma
                        seleção de peixes ornamentais,
                        aquários e acessórios para transformar qualquer espaço num ambiente aquático deslumbrante.</p>
                    <a href="/" class="btn-get-started"><i class="bi bi-search"></i> Descobre Agora!</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="eterna/img/hero-carousel/hero-carousel-2.jpg" alt="">
                <div class="carousel-container">
                    <h2>Dá <span>Vida</span> ao Teu <span>Aquário!</span></h2>
                    <p>Descobre uma grande variedade de peixes ornamentais e os melhores acessórios para manter o teu
                        aquário vibrante e saudável.</p>
                    <a href="/" class="btn-get-started"><i class="bi bi-search"></i> Descobre Agora!</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <div class="featured container">

            <div class="row gy-4">

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-award"></i></div>
                        <h4><a href="" class="stretched-link"> Qualidade Garantida</a></h4>
                        <p>Trabalhamos com fornecedores certificados para oferecer produtos de alta qualidade.</p>
                    </div>
                </div><!-- End Featured Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-people"></i></div>
                        <h4><a href="" class="stretched-link">Suporte Especializado</a></h4>
                        <p> Precisas de ajuda? A nossa equipa está pronta para te aconselhar na escolha ideal.</p>
                    </div>
                </div><!-- End Featured Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-box-seam"></i></div>
                        <h4><a href="" class="stretched-link">Entregas Rápidas</a></h4>
                        <p>Recebe os teus produtos com rapidez e segurança em qualquer ponto do país.</p>
                    </div>
                </div><!-- End Featured Item -->

            </div>
        </div>

    </section><!-- /Hero Section -->


</div>



<section id="produtos" class="bg-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">💙 Os nossos produtos</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($produtos as $produto)
                    <div class="group relative bg-white border rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-48 object-cover group-hover:opacity-75">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                <a href="{{ $produto->nome }}</a>
                            </h3>
                            <p class="text-sm text-gray-500 mb-2">{{ Str::limit($produto->descricao, 100) }}</p>
                            <p class="text-lg font-semibold text-gray-900">{{ number_format($produto->preco, 2, ',', '.') }} €</p>
                        </div>

                        @if($produto->tipo === 'peixe')
                            <div class="absolute bottom-4 left-4 bg-white px-2 py-1 text-xs font-semibold text-gray-700 bg-opacity-75 rounded-md">
                                Cor: {{ $produto->cor }} | Tamanho: {{ $produto->tamanho }}
                            </div>
                        @elseif($produto->tipo === 'acessorio')
                            <div class="absolute bottom-4 left-4 bg-white px-2 py-1 text-xs font-semibold text-gray-700 bg-opacity-75 rounded-md">
                                Categoria: {{ $produto->categoria_acessorio }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>



</x-eterna-layout>
