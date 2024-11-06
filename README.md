
### Para funcionar o projeto
1) Se tiver o Docker instalado, remova!

2) Habilite o WSL no Windows 10
```sh
dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart
```
```sh
dism.exe /online /enable-feature /featurename:VirtualMachinePlatform /all /norestart
```

3) Habilitar o WSL para a versão 2
```sh
wsl --set-default-version 2
```

4) Instalar o Ubuntu na Microsoft Store

5) Instalar o Windows Terminal

6) Desabilitar o Hyper-v (para desabilitar voce precisa ir em ativar e desativar recursos do windows)

7) Criar o arquivo .wslconfig em "C:\Users\<seu_usuario>"
```sh
[wsl2]
memory=8GB
processors=4
swap=2GB
```
8) Instalar o Docker
Depois com o docker instalado vá em configurações/recursos/wsl integration no docker e ative:
1. Enable integration with my default WSL distro
2. ubuntu

Salve e reinicie o docker... feito isso prossiga para rodar o projeto


### Passo a passo
Clone Repositório
```sh
git clone -b v3 https://github.com/mauricio-camargoo/projeto-integrador-2.git projeto-integrador-2
```
```sh
cd projeto-integrador-2
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Laravel"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)
