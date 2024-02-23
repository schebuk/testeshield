# Sistema de Busca de Endereço por CEP

Este é um sistema simples para buscar endereços com base no CEP usando Laravel (backend) e jQuery/Bootstrap (frontend).

## Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas em sua máquina:

- PHP >= 7.3
- Composer (gerenciador de dependências PHP)
- MySQL (ou outro banco de dados compatível com Laravel)
- Um navegador da web

## Instalação

1. Clone este repositório para o seu ambiente local:

```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
```
Navegue até o diretório do projeto:
```bash
cd nome-do-repositorio
```
Instale as dependências PHP usando o Composer:
```bash
composer install
```
Copie o arquivo .env.example e renomeie para .env:
```bash
cp .env.example .env
```
Gere uma chave de aplicativo Laravel:
```bash
php artisan key:generate
```
Configure as informações do banco de dados no arquivo .env.

Execute as migrações para criar as tabelas do banco de dados:

```bash
php artisan migrate
```
Execute os seeders para popular o banco de dados com dados de exemplo:
```bash
php artisan db:seed --class=EmpresaSeeder
```
Executando o Sistema

Para rodar o sistema, você pode usar o servidor embutido do PHP (para ambiente de desenvolvimento):

```bash
php artisan serve
```
Isso iniciará um servidor de desenvolvimento em http://localhost:8000.

Uso
Acesse o sistema no seu navegador e insira um CEP válido no campo de busca. O sistema buscará o endereço correspondente no banco de dados e o exibirá na tela.