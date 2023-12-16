<?php 

$routes = [
    '/' => 'HomeController@index',
    '/create' => 'UsuarioController@create',
    '/showform' => 'UsuarioController@showform',
    '/login' => 'UsuarioController@showLoginForm',
    '/doLogin' => 'UsuarioController@login',
    '/users' => 'usuarioController@showUserDetails',
    '/logout' => 'UsuarioController@logout',
    '/admin/dashboard' => 'AdminController@dashboard',
    '/advogado/dashboard' => 'AdvogadoController@dashboard',
    '/cliente/dashboard' => 'ClienteController@dashboard',
    '/secretario/dashboard' => 'SecretarioController@dashboard',
    '/secretario/show' => 'DocumentoController@showDashboard',
    '/adicionar-documento' => 'DocumentoController@create',
    '/adicionar-caso' => 'CasoController@create',
    '/caso/show' => 'CasoController@showDashboard'
];

