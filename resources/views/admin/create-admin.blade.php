<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Novo Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.store-admin') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Nome</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">Senha</label>
                            <input type="password" name="password" id="password" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-gray-700">Confirmar Senha</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Criar Administrador</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
