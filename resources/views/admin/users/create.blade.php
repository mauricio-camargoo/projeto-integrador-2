<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 container">
                    <x-alert />

                    <form action="{{ Route('users.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Seu nome">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            </div>

                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input name="password" type="password" value="{{ old('password') }}" class="form-control" placeholder="Senha">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="cpf" type="text" value="{{ old('cpf') }}" class="form-control" placeholder="Seu CPF">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="rg" type="text" value="{{ old('rg') }}" class="form-control" placeholder="Seu RG">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <select class="form-select form-select-lg">
                                    <option name="permission" selected>Permissão</option>
                                    <option name="permission" value="{{ old('permission') }}">Usuário</option>
                                    <option name="permission" value="{{ old('permission') }}">Administrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="birthday" type="text" value="{{ old('birthday') }}" class="form-control" placeholder="Data de Nascimento">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="phonecel" type="text" value="{{ old('phonecel') }}" class="form-control" placeholder="Celular">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="whatsapp" type="text" value="{{ old('whatsapp') }}" class="form-control" placeholder="Whatsapp">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="telegram" type="text" value="{{ old('telegram') }}" class="form-control" placeholder="Telegram">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="cep" type="text" value="{{ old('cep') }}" class="form-control" placeholder="Seu CEP">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="logradouro" type="text" value="{{ old('logradouro') }}" class="form-control" placeholder="Rua">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="complemento" type="text" value="{{ old('complemento') }}" class="form-control" placeholder="Complemento">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="unidade" type="text" value="{{ old('unidade') }}" class="form-control" placeholder="Unidade">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="bairro" type="text" value="{{ old('bairro') }}" class="form-control" placeholder="Bairro">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="localidade" type="text" value="{{ old('localidade') }}" class="form-control" placeholder="Cidade">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="uf" type="text" value="{{ old('uf') }}" class="form-control" placeholder="Sigla do Estado">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="estado" type="text" value="{{ old('estado') }}" class="form-control" placeholder="Estado">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="regiao" type="text" value="{{ old('regiao') }}" class="form-control" placeholder="Região">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="ibge" type="text" value="{{ old('ibge') }}" class="form-control" placeholder="IBGE">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="gia" type="text" value="{{ old('gia') }}" class="form-control" placeholder="GIA">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="ddd" type="text" value="{{ old('ddd') }}" class="form-control" placeholder="DDD">
                            </div>
                            <div class="input-group mb-3 col">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="siafi" type="text" value="{{ old('siafi') }}" class="form-control" placeholder="SIAFI">
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
