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
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Seu nome">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input name="password" type="password" value="{{ old('password') }}" class="form-control" placeholder="Senha">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input name="cpf" type="text" value="{{ old('cpf') }}" class="form-control" placeholder="Seu CPF">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input name="rg" type="text" value="{{ old('rg') }}" class="form-control" placeholder="Seu RG">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <select name="permission" class="form-select form-select-lg">
                                    <option value="usr">Usuário</option>
                                    <option value="adm">Administrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                <input name="birthday" type="text" value="{{ old('birthday') }}" class="form-control" placeholder="Data de Nascimento">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                <input name="phonecel" type="text" value="{{ old('phonecel') }}" class="form-control" placeholder="Celular">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="whatsapp" type="text" value="{{ old('whatsapp') }}" class="form-control" placeholder="Whatsapp">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="telegram" type="text" value="{{ old('telegram') }}" class="form-control" placeholder="Telegram">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map"></i></span>
                                <input id="cep" name="cep" type="text" value="{{ old('cep') }}" class="form-control" placeholder="Seu CEP">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="rua" name="logradouro" type="text" value="{{ old('logradouro') }}" class="form-control" placeholder="Rua">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input name="numero" type="text" value="{{ old('numero') }}" class="form-control" placeholder="número">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input name="complemento" type="text" value="{{ old('complemento') }}" class="form-control" placeholder="Complemento">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input name="unidade" type="text" value="{{ old('unidade') }}" class="form-control" placeholder="Unidade">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="bairro" name="bairro" type="text" value="{{ old('bairro') }}" class="form-control" placeholder="Bairro">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="cidade" name="localidade" type="text" value="{{ old('localidade') }}" class="form-control" placeholder="Cidade">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="uf" name="uf" type="text" value="{{ old('uf') }}" class="form-control" placeholder="Sigla do Estado">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input id="estado" name="estado" type="text" value="{{ old('estado') }}" class="form-control" placeholder="Estado">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                <input id="regiao" name="regiao" type="text" value="{{ old('regiao') }}" class="form-control" placeholder="Região">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="ibge" name="ibge" type="text" value="{{ old('ibge') }}" class="form-control" placeholder="IBGE">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="gia" name="gia" type="text" value="{{ old('gia') }}" class="form-control" placeholder="GIA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="ddd" name="ddd" type="text" value="{{ old('ddd') }}" class="form-control" placeholder="DDD">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                <input id="siafi" name="siafi" type="text" value="{{ old('siafi') }}" class="form-control" placeholder="SIAFI">
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
    <script>
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
                    document.getElementById('ibge').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>
</x-app-layout>
