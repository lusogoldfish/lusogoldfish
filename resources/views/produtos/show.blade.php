<x-eterna-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <!-- Exibindo informações do produto -->
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 md:pl-6">
                <h2 class="text-3xl font-semibold text-gray-800">{{ $produto->nome }}</h2>
                <p class="text-lg text-gray-600 mt-2">{{ $produto->descricao }}</p>
                <div class="mt-4">
                    <p class="text-xl font-bold text-gray-800">Preço: €{{ number_format($produto->preco, 2) }}</p>
                </div>

                <!-- Botões de Adicionar ao Carrinho e Comprar -->
                <div class="mt-6 flex space-x-4">
                    <form action="{{ route('carrinho.adicionar', $produto->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">
                            Adicionar ao Carrinho
                        </button>
                    </form>
                    <form action="{{ route('compra.fazer', $produto->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 focus:outline-none">
                            Comprar Agora
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-eterna-layout>
