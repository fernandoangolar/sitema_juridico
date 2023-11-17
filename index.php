<?php 

require_once './vendor/autoload.php';

require_once 'Router.php';

$routes = [
    '/' => 'UsuarioController@index',
    '/login' => 'UsuarioController@login',
    '/usuario/detalhes' => 'UsuarioController@show',
    '/usuario/formulario' => 'UsuarioController@create',
    '/usuario/lista' => 'UsuarioController@lista',
    '/usuario/atualizar' => 'UsuarioController@update',
    '/usuario/excluir' => 'UsuarioController@delete',
];

$router = new Router($routes);
$router->route();