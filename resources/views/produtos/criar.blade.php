<x-eterna-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Adicionar Novo Produto</h2>

        <!-- Formulário de criação de produto -->
        <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
                <input type="text" name="nome" style="color: black" id="nome" required class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea name="descricao" style="color: black" id="descricao" required class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="4"></textarea>
            </div>

            <div>
                <label for="preco" class="block text-sm font-medium text-gray-700">Preço (€)</label>
                <input type="number" step="0.01" style="color: black" name="preco" id="preco" required class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Novo campo para escolher tipo de produto (Peixe ou Acessório) -->
            <div>
                <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo de Produto</label>
                <select name="tipo" id="tipo" style="color: black" required class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="peixe">Peixe</option>
                    <option value="acessorio">Acessório</option>
                </select>
            </div>

            <!-- Se o produto for peixe, aparecerão as opções de cor e tamanho -->
            <div id="peixe-options" class="hidden">
                <div>
                    <label for="cor" class="block text-sm font-medium text-gray-700">Cor do Peixe</label>
                    <input type="text" style="color: black" name="cor" id="cor" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="tamanho" class="block text-sm font-medium text-gray-700">Tamanho do Peixe</label>
                    <select name="tamanho" style="color: black" id="tamanho" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
            </div>

            <!-- Se o produto for acessório, aparecerá a opção de tipo de acessório -->
            <div id="acessorio-options" class="hidden">
                <div>
                    <label for="categoria_acessorio" class="block text-sm font-medium text-gray-700">Categoria do Acessório</label>
                    <select name="categoria_acessorio"  style="color: black" id="categoria_acessorio" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="filtro">Filtro</option>
                        <option value="aquecedor">Aquecedor</option>
                        <option value="substrato">Substrato</option>
                        <option value="iluminacao">Iluminação</option>
                    </select>
                </div>
            </div>

            <!-- Campo para upload de imagem -->
            <div>
                <label for="imagem" class="block text-sm font-medium text-gray-700">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" onchange="previewImage()">
            </div>

            <!-- Preview da imagem -->
            <div class="mt-4 text-center">
                <img id="image-preview" src="" alt="Preview da Imagem" class="hidden w-full max-w-xs mx-auto rounded-lg">
            </div>

            <div class="text-center">
                <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Adicionar Produto
                </button>
            </div>
        </form>
    </div>

    <!-- Script para mostrar/ocultar opções dependendo do tipo de produto -->
    <script>
        document.getElementById('tipo').addEventListener('change', function() {
            const tipo = this.value;
            const peixeOptions = document.getElementById('peixe-options');
            const acessorioOptions = document.getElementById('acessorio-options');

            // Mostrar ou esconder as opções com base no tipo de produto
            if (tipo === 'peixe') {
                peixeOptions.classList.remove('hidden');
                acessorioOptions.classList.add('hidden');
            } else if (tipo === 'acessorio') {
                acessorioOptions.classList.remove('hidden');
                peixeOptions.classList.add('hidden');
            }
        });

        // Função para pré-visualizar a imagem
        function previewImage() {
            const file = document.getElementById('imagem').files[0];
            const preview = document.getElementById('image-preview');
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
                preview.classList.remove('hidden');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.classList.add('hidden');
            }
        }
    </script>
</x-eterna-layout>
