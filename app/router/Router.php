<?php 

$routes = [
    '/' => 'HomeController@index',
    '/create' => 'UsuarioController@create', // o action do formulário para criar
    '/showform' => 'UsuarioController@showform', // Tela para criar um user
    '/login' => 'UsuarioController@showLoginForm',  // Tela para fazer login
    '/doLogin' => 'UsuarioController@login',   // O action do formulário para realizar o login
    '/users' => 'usuarioController@showUserDetails',
];

