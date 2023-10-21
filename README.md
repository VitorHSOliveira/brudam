# Teste Brudam


> *Utilizei o [Laragon](https://laragon.org/download/index.html) como servidor de PHP, mas você pode usar qualquer um web server.*

### Banco de Dados

* Na raiz do projeto está um arquivo **banco.sql**, rode ele em seu banco de dados para realizar a criação do mesmo.

### Instalação e carregamento

* Baize o zip do projeto.
* Adicione a pasta do projeto à pasta do web server, pasta **www** se for Laragon ou pasta **htdocs** se for xampp.
* Ligue o **Apache** e o **Mysql**.

### Migrations

No terminal do seu web server, entre na pasta do projeto e rode o comando abaixo. O comando executara as migrations do banco de dados e criará o **banco** e as **tabelas**.

```
php artisan migrate
```
Com o banco e as tabelas criadas pela migrations, rode o comando seed para preencher o banco com dados fictícios de 20 cidades e 5 clientes.

```
php artisan db:seed
```

Após utilizar os comandos acima, é só iniciar o servidor, ainda no terminal, rode o comando abaixo.

```
php artisan serve
```

Copie e cole o link no seu navegador.

<!--
 ____                 _
| __ ) _ __ _   _  __| | __ _ _ __ ___
|  _ \| '__| | | |/ _` |/ _` | '_ ` _ \
| |_) | |  | |_| | (_| | (_| | | | | | |
|____/|_|   \__,_|\__,_|\__,_|_| |_| |_|
 -->
