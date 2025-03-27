<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard do Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-semibold">Administradores Atuais</h3>
                    <ul>
                        @foreach($admins as $admin)
                            <li>{{ $admin->name }} - {{ $admin->email }}</li>
                        @endforeach
                    </ul>

                    <hr class="my-4">

                    <h3 class="text-xl font-semibold">Produtos Cadastrados</h3>
                    <ul>
                        @foreach($products as $product)
                            <li>{{ $product->name }} - {{ $product->price }}€</li>
                        @endforeach
                    </ul>

                    <hr class="my-4">

                    <a href="{{ route('admin.create-admin') }}" class="btn btn-primary">Adicionar Novo Administrador</a>
                    <a href="{{ route('admin.create-product') }}" class="btn btn-primary">Criar Produto</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
