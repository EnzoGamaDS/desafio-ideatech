# Games - Ideatech

![GitHub](https://img.shields.io/badge/php-4c43a8?style=for-the-badge&logo=php&logoColor=blue)
![GitHub](https://img.shields.io/badge/laravel-d41336?style=for-the-badge&logo=laravel&logoColor=white)
![GitHub](https://img.shields.io/badge/mysql-186ed6?style=for-the-badge&logo=mysql&logoColor=white)

> O desafio trata-se de um CRUD de games e consoles que estão se relacionando de forma muitos para muitos (Many TO Many).

### Modificações futuras 

Projeto em desenvolvimento

- [ ] Responsividade
- [ ] CRUD de console
- [ ] Estilização
- [ ] Testes unitários

## 💻 Pré-requisitos

 * Projeto requer o PHP nas versões 8.0.2 ou superior, pois foi desenvolvido com o laravel na versão 9 que na data de desenvolvimento do projeto é a que se encontra mais estável.

Para instalar o *Games*, siga estas etapas:

Clone o repositorio:
```
git fork https://github.com/EnzoGamaDS/desafio-ideatech.git
```

Instale as dependências e o framework
```
composer install --no-scripts
````

Copie o arquivo .env.example
```
cp .env.example .env
````

Crie uma nova chave para a aplicação
```
php artisan key:generate
````

Rode as migrations
```
php artisan migrate
````
 
 ## ☕ Usando <Make-Your-Burguer>

Para usar <Games> no servidor locar, siga estas etapas:

Suba o servidor localmente
```
php artisan serve
````
 
 Abra http://localhost:8000/games no seu navegador favorito para ver o sistema funcionado.
