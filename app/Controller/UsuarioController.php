<?php

require_once __DIR__ . '/../Model/DAO/UsuarioDAO.php';

class UsuarioController 
{
    private $usuarioDAO;

    public function __construct()
    {
        $this->usuarioDAO = new UsuarioDAO();
    }


    public function create ()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

            if (empty($name) || empty($email) || empty($senha)) {
                echo "Falha ao criar usuário: Preencha todos os campos.";
                return;
            }
        
            $usuarioDTO = new UsuarioDTO();
        
            $usuarioDTO->setName($name);
            $usuarioDTO->setEmail($email);
            $usuarioDTO->setSenha($senha);
        
            $success = $this->usuarioDAO->create($usuarioDTO);
        
            if ($success)
            {
                echo "Usuário criado com sucesso";
            } else
            {
                echo "Falha ao criar usuário";
            }
        } else {
            header('Location: /create');
        }
    }

    public function login ()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

        if (empty($email) || empty($senha)) {
            echo "Erro ao fazer login: Preencha todos os campos.";
            return;
        }

        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getByEmail($email);

        if ($usuario && password_verify($senha, $usuario->senha)) {
            header('location: /apps/');
            exit();
        } else {
            header('Location: /login?error=1');
            exit();
        }
    }   

    public function showform()
    {
        include './View/usuario/formulario.php';
    }

    public function showLoginForm()
    {
        include './View/usuario/formulario_login.php';
    }

    public function showUserDetails()
    {
        $listaUsuarios = $this->usuarioDAO->getAllUsers();

        require './View/usuario/details_usuarios.php';
    }
}