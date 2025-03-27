<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Novo Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.store-product') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Nome do Produto</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">Descrição</label>
                            <textarea name="description" id="description" class="mt-1 block w-full" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700">Preço</label>
                            <input type="number" name="price" id="price" class="mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Criar Produto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
