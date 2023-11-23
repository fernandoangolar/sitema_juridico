<?php 

$routes = [
    '/' => 'HomeController@index',
    '/create' => 'UsuarioController@create', 
    '/showform' => 'UsuarioController@showform', 
    '/login' => 'UsuarioController@showLoginForm',  
    '/doLogin' => 'UsuarioController@login',   
    '/users' => 'usuarioController@showUserDetails',
    '/logout' => 'UsuarioController@logout',
];

