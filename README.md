<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Api VueProdutos

Api desenvolvida para estudos com Vuejs como frontend,
nessa api ela retorna categorias, produtos, é possível cadastrar 
novas categorias e novos produtos, editar, exibir e deletar. Além de ter um sistema de 
login, onde só usuários logados tem permissão de cadastrar categorias e produtos.


## Stack utilizada

**Front-end:** VueJs , Axios e Bootstrap - [VueProdutos](https://github.com/ferreira-jr/vueprodutos)

**Back-end:** Laravel, Postgres e Docker


## Configurações Iniciais

Cria o container do docker

```bash
  docker-compose up -d
```
Atualiza e instala a dependecia do php via composer

```bash
  docker-compose run --rm composer update
  docker-compose run --rm composer install
```
Copia e cria o arquivo de configuracao do laravel 
```bash
  cp .env.example .env
```
Gera a chave do sistema
```bash
  docker-compose run --rm artisan key:generate
```
O arquivo .env deve ser configurado nesse momento para que o comando migrate funcione.
É fundamental que a configuração esteja nesta ordem.
e posteriormente os dados de acesso ao banco do sistema. O env.example já esta neste formato só
aguardando os dados.
## Acesso ao Banco Local

Para rodar esse projeto, você vai precisar configurar o seu .env

`DB_CONNECTION=pgsql`

`DB_HOST=postgres`

`DB_PORT=5432`

`DB_DATABASE=api_produtos`

`DB_USERNAME=postgres`

`DB_PASSWORD=123456789`

Cria as tabelas do banco de dados
```bash
  docker-compose run --rm artisan key:generate
```


Acesso ao PgAdmin
- Email: admindev@api.com
- Password: 123456789
## Autores

- [@ferreira-jr](https://github.com/ferreira-jr)

