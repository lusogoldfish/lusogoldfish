<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    private $produtos = [
        1 => [
            'id' => 1,
            'nome' => 'Guppy Macho',
            'categoria' => 'peixes',
            'tipo' => 'Água Doce',
            'preco' => 3.50,
            'descricao' => 'O Guppy é um dos peixes mais populares em aquariofilia devido à sua beleza, resistência e facilidade de reprodução. Os machos são mais coloridos que as fêmeas e possuem caudas mais desenvolvidas.',
            'caracteristicas' => [
                'Tamanho' => '4-6 cm',
                'Temperatura' => '22-28°C',
                'pH' => '6.8-7.8',
                'Comportamento' => 'Pacífico',
                'Alimentação' => 'Omnívoro',
                'Reprodução' => 'Ovovivíparo',
            ],
            'cuidados' => [
                'Manter em grupos de pelo menos 3 exemplares',
                'Aquário mínimo de 40 litros',
                'Alimentar 2-3 vezes por dia em pequenas quantidades',
                'Temperatura estável entre 24-26°C',
                'Boa filtragem e oxigenação',
            ],
            'imagem' => 'https://th.bing.com/th/id/R.cf5fad3ba1b63b130946b1284f4d9f43?rik=T5Gs2qt9b447Kg&riu=http%3a%2f%2fzooacuarium.com.ec%2fimages%2fpeces_tropicales%2fguppy_macho.jpg&ehk=%2fDs2TRsAZ13zvXUqXtUk1tMHDWbhSqhe4gNr7jK6Kl4%3d&risl=&pid=ImgRaw&r=0',
            'galeria' => [
                'https://th.bing.com/th/id/R.cf5fad3ba1b63b130946b1284f4d9f43?rik=T5Gs2qt9b447Kg&riu=http%3a%2f%2fzooacuarium.com.ec%2fimages%2fpeces_tropicales%2fguppy_macho.jpg&ehk=%2fDs2TRsAZ13zvXUqXtUk1tMHDWbhSqhe4gNr7jK6Kl4%3d&risl=&pid=ImgRaw&r=0',
                'https://www.aqualovers.pt/images/1028/guppymachomoscow_2.jpg',

            ],
            'stock' => true,
        ],
        2 => [
            'id' => 2,
            'nome' => 'Neon Tetra',
            'categoria' => 'peixes',
            'tipo' => 'Água Doce',
            'preco' => 2.90,
            'descricao' => 'O Neon Tetra é um peixe de cardume pequeno e colorido, conhecido pela sua faixa azul brilhante e vermelha. É ideal para aquários comunitários e muito popular entre aquariofilistas.',
            'caracteristicas' => [
                'Tamanho' => '3-4 cm',
                'Temperatura' => '20-26°C',
                'pH' => '5.0-7.0',
                'Comportamento' => 'Pacífico, cardume',
                'Alimentação' => 'Omnívoro',
                'Reprodução' => 'Ovíparo',
            ],
            'cuidados' => [
                'Manter em cardumes de pelo menos 6 exemplares',
                'Aquário mínimo de 60 litros',
                'Iluminação suave',
                'Plantas naturais no aquário',
                'Água ligeiramente ácida',
            ],
            'imagem' => 'https://wallpapercave.com/wp/wp5217513.jpg',
            'galeria' => [
                'https://wallpapercave.com/wp/wp5217513.jpg',
                'https://fishroom.co.uk/wp-content/uploads/2016/04/wp-1459928614684.jpeg',
            ],
            'stock' => true,
        ],
        3 => [
            'id' => 3,
            'nome' => 'Filtro Externo 1000L/h',
            'categoria' => 'filtros',
            'tipo' => 'Equipamento',
            'preco' => 89.90,
            'descricao' => 'Filtro externo de alta qualidade com capacidade para 1000 litros por hora. Ideal para aquários de água doce e salgada até 200 litros. Inclui materiais filtrantes e é muito silencioso.',
            'caracteristicas' => [
                'Capacidade' => '1000 L/h',
                'Aquário máximo' => '200 litros',
                'Potência' => '25W',
                'Ruído' => '< 35dB',
                'Materiais' => 'Incluídos',
                'Garantia' => '2 anos',
            ],
            'cuidados' => [
                'Limpeza mensal dos materiais filtrantes',
                'Verificar vedações regularmente',
                'Não deixar funcionar sem água',
                'Manter longe de fontes de calor',
                'Usar apenas materiais filtrantes originais',
            ],
            'imagem' => 'https://down-br.img.susercontent.com/file/91ba4676275c8be4678d52712c4cc2a9',
            'galeria' => [
                'https://down-br.img.susercontent.com/file/91ba4676275c8be4678d52712c4cc2a9',

            ],
            'stock' => true,
        ],
        4 => [
            'id' => 4,
            'nome' => 'Barra LED 60cm',
            'categoria' => 'iluminacao',
            'tipo' => 'Equipamento',
            'preco' => 45.90,
            'descricao' => 'Barra LED de alta qualidade com espectro completo, ideal para aquários plantados. Promove o crescimento saudável das plantas aquáticas e realça as cores dos peixes.',
            'caracteristicas' => [
                'Comprimento' => '60 cm',
                'Potência' => '24W',
                'Espectro' => 'Full spectrum',
                'LEDs' => '120 unidades',
                'Vida útil' => '50.000 horas',
                'Controlo' => 'Dimmer incluído',
            ],
            'cuidados' => [
                'Instalar a 15-20cm da superfície da água',
                'Usar timer para controlar fotoperíodo',
                'Limpar regularmente com pano húmido',
                'Não submergir na água',
                'Verificar conexões elétricas',
            ],
            'imagem' => 'https://http2.mlstatic.com/D_NQ_NP_711605-MLB73336753203_122023-O.webp',
            'galeria' => [
                'https://http2.mlstatic.com/D_NQ_NP_711605-MLB73336753203_122023-O.webp',
            ],
            'stock' => true,
        ],
        5 => [
            'id' => 5,
            'nome' => 'Aquecedor 100W',
            'categoria' => 'aquecedores',
            'tipo' => 'Equipamento',
            'preco' => 25.90,
            'descricao' => 'Aquecedor com termostato automático de 100W, ideal para aquários até 100 litros. Mantém a temperatura estável e possui proteção contra superaquecimento.',
            'caracteristicas' => [
                'Potência' => '100W',
                'Aquário máximo' => '100 litros',
                'Temperatura' => '18-34°C',
                'Precisão' => '±1°C',
                'Material' => 'Vidro borosilicato',
                'Proteção' => 'IP68',
            ],
            'cuidados' => [
                'Instalar na vertical ou diagonal',
                'Nunca ligar fora de água',
                'Aguardar 15 min após desligar para retirar',
                'Verificar temperatura regularmente',
                'Limpar com escova macia',
            ],
            'imagem' => 'https://down-br.img.susercontent.com/file/br-11134207-7r98o-lw4po0dln5pxcc',
            'galeria' => [
                'https://down-br.img.susercontent.com/file/br-11134207-7r98o-lw4po0dln5pxcc',
            ],
            'stock' => true,
        ],
        6 => [
            'id' => 6,
            'nome' => 'Bomba de Ar 5W',
            'categoria' => 'bombas',
            'tipo' => 'Equipamento',
            'preco' => 18.90,
            'descricao' => 'Bomba de ar silenciosa de 5W, perfeita para oxigenação de aquários. Inclui mangueira e pedra porosa. Funcionamento 24h contínuo.',
            'caracteristicas' => [
                'Potência' => '5W',
                'Fluxo' => '4 L/min',
                'Ruído' => '< 40dB',
                'Aquário máximo' => '150 litros',
                'Acessórios' => 'Mangueira + pedra',
                'Garantia' => '1 ano',
            ],
            'cuidados' => [
                'Colocar acima do nível da água',
                'Usar válvula anti-retorno',
                'Limpar filtro de ar mensalmente',
                'Verificar mangueiras regularmente',
                'Manter em local seco',
            ],
            'imagem' => 'https://tse4.mm.bing.net/th/id/OIP.kxo6w5a8Y0m-XewBWgKepQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3',
            'galeria' => [
                'https://tse4.mm.bing.net/th/id/OIP.kxo6w5a8Y0m-XewBWgKepQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3',
            ],
            'stock' => true,
        ],
        7 => [
            'id' => 7,
            'nome' => 'Tronco Natural',
            'categoria' => 'decoracao',
            'tipo' => 'Decoração',
            'preco' => 15.90,
            'descricao' => 'Tronco natural tratado especialmente para aquários. Ideal para aquários plantados, fornece esconderijos naturais para os peixes e suporte para plantas.',
            'caracteristicas' => [
                'Material' => 'Madeira natural',
                'Tamanho' => '15-20 cm',
                'Tratamento' => 'Aquário-safe',
                'Peso' => '200-300g',
                'Origem' => 'Sustentável',
                'Durabilidade' => '5+ anos',
            ],
            'cuidados' => [
                'Ferver antes da primeira utilização',
                'Pode escurecer a água inicialmente',
                'Escovar periodicamente',
                'Não usar produtos químicos',
                'Verificar se não apodrece',
            ],
            'imagem' => 'https://aquaninjas.com.br/wp-content/uploads/2024/05/Sem-nome-1920-x-700-px.png',
            'galeria' => [
                'https://aquaninjas.com.br/wp-content/uploads/2024/05/Sem-nome-1920-x-700-px.png',
            ],
            'stock' => true,
        ],
    ];

    public function index()
    {
        return view('portfolio', ['produtos' => $this->produtos]);
    }

    public function show($id)
    {
        $produto = $this->produtos[$id] ?? null;

        if (! $produto) {
            abort(404);
        }

        // Produtos relacionados (mesma categoria)
        $relacionados = array_filter($this->produtos, function ($p) use ($produto) {
            return $p['categoria'] === $produto['categoria'] && $p['id'] !== $produto['id'];
        });

        return view('produto-detalhes', compact('produto', 'relacionados'));
    }
}
