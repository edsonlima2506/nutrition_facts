
# Food Genius

O projeto Food Genius é um SaaS destino ao gerenciamento de informações nutricionais, receitas e fichas técnicas.


## Instalação

Utilize o Docker para executar o projeto

```bash
  docker compose up

  docker compose exec app bash

  composer install

  docker compose restart

  npm install
  npm run prod
```
    
## Stack

[![PHP](https://img.shields.io/badge/PHP-V8.2-blue)](https://www.php.net/docs.php)

[![Laravel](https://img.shields.io/badge/Laravel-V8.75-red)](https://laravel.com/docs/8.x/readme)

[![Backpack](https://img.shields.io/badge/Backpack-V4.1-purple)](https://backpackforlaravel.com/docs/4.1)

[![MYSQL](https://img.shields.io/badge/MySQL-V5.7.22-blue)](https://dev.mysql.com/doc/)

[![Docker](https://img.shields.io/badge/Docker-X-blue)](https://docs.docker.com/)

[![Jquery](https://img.shields.io/badge/JQuery-V3.4.1-pink)](https://jquery.com/)

[![Bootstrap](https://img.shields.io/badge/Bootstrap-V5.3.x-purple)](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
## Variáveis de Ambiente

Para rodar esse projeto, você vai precisar adicionar as seguintes variáveis de ambiente no seu .env

`DB_CONNECTION=mysql`

`DB_HOST=mysql`

`DB_PORT=3306`

`DB_DATABASE=laravel`

`DB_USERNAME=root`

`DB_PASSWORD=root`
