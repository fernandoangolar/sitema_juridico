<?php 

session_start();

class HomeController
{

    public function index ()
    {

        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            $userName = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : 'Usuário';

            $content = "Bem-vindo, $userName! Esta é a página inicial do Sistema Jurídico.";
        } else {
            header('Location: /apps/login');
            exit();
        }
 
        include './View/home/index.php';
    }
}