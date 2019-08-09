<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre
API RESTFULL para gerenciar Pizzaria
Os endpoints estão nas rotas

- GET /api/pizzas/ - acessa todas as pizzas
- GET /api/pizzas/{id} - retorna a pizza pelo id
- POST /api/pizzas - cadastra a pizza enviando sabor,tamanho,preco
- PUT  /api/pizzas/{id}  - edita a pizza com o id selecionado
- DELETE  /api/pizzas/{id}  - deleta a pizza com o id selecionado

- GET /api/pedidos/ - acessa todas os pedidos
- GET /api/pedidos/{id} - retorna o pedido pelo id
- POST /api/pedidos - cadastra o pedido enviando id_pizza,telefone_cliente,nome_cliente,endereco,status
- PUT  /api/pedidos/{id}  - edita ao pedido com o id selecionado
- DELETE  /api/pedidos/{id}  - deleta o pedido com o id selecionado

