<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Usuário') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-alert />

                    <form action="{{ Route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input name="name" type="text" placeholder="Seu nome" value="{{ $user->name }}">
                        <input name="email" type="email" placeholder="Seu email" value="{{ $user->email }}">
                        <input name="password" type="password" placeholder="Seu senha">
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
