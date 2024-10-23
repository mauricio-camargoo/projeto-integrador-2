<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do Usuário') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-alert />

                    <form action="{{ Route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <label for="">Nome:</label><span>{{ $user->name }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <label for="">E-mail:</label><span>{{ $user->email }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <label for="">CPF:</label><span>{{ $user->cpf }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <label for="">RG:</label><span>{{ $user->rg }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                <label for="">Data de Nascimento:</label><span>{{ $user->birthday }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                <label for="">Celular:</label><span>{{ $user->phonecel }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <label for="">Whatsapp:</label><span>{{ $user->whatsapp }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <label for="">Telegram:</label><span>{{ $user->telegram }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                <label for="">CEP:</label><span>{{ $user->cep }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Rua/Avenida/Tr:</label><span>{{ $user->logradouro }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Número:</label><span>{{ $user->numero }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Complemento:</label><span>{{ $user->complemento }}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Bairro:</label><span>{{ $user->bairro }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Cidade:</label><span>{{ $user->localidade }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">UF:</label><span>{{ $user->uf }}</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <label for="">Estado:</label><span>{{ $user->estado }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                <label for="">Nome:</label><span>{{ $user->regiao }}</span>
                            </div>
                        </div>

                        <div class="row col-2">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                            <a href="{{ Route('users.index') }}" class="btn btn-warning" type="button">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
