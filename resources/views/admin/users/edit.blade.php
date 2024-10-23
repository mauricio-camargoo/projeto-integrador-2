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

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="name" type="text" value="{{ $user->name }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input name="email" type="email" value="{{ $user->email }}" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input name="password" type="password" value="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input name="cpf" type="text" value="{{ $user->cpf }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input name="rg" type="text" value="{{ $user->rg }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <select name="permission" class="form-select form-select-lg">
                                    @if ($user->permission == "usr")
                                        <option value="usr">Usuário</option>
                                    @elseif ($user->permission == "adm")
                                        <option value="adm">Administrador</option>
                                    @elseif ($user->permission == "" || $user->permission == null)
                                        <option value="">{{ $user->permission }}</option>
                                    @endif
                                        <option value="usr">Usuário</option>
                                        <option value="adm">Administrador</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                <input name="birthday" type="text" value="{{ $user->birthday }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                <input name="phonecel" type="text" value="{{ $user->phonecel }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="whatsapp" type="text" value="{{ $user->whatsapp }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="telegram" type="text" value="{{ $user->telegram }}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                <input id="cep" name="cep" type="text" value="{{ $user->cep }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="rua" name="logradouro" type="text" value="{{ $user->logradouro }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input name="numero" type="text" value="{{ $user->numero }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="complemento" name="complemento" type="text" value="{{ $user->complemento }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="unidade" name="unidade" type="text" value="{{ $user->unidade }}" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="bairro" name="bairro" type="text" value="{{ $user->bairro }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="cidade" name="localidade" type="text" value="{{ $user->localidade }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="uf" name="uf" type="text" value="{{ $user->uf }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="estado" name="estado" type="text" value="{{ $user->estado }}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                <input id="regiao" name="regiao" type="text" value="{{ $user->regiao }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="ibge" name="ibge" type="text" value="{{ $user->ibge }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="gia" name="gia" type="text" value="{{ $user->gia }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="ddd" name="ddd" type="text" value="{{ $user->ddd }}" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="siafi" name="siafi" type="text" value="{{ $user->siafi }}" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
