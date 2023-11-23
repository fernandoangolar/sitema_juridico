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
                header('location: /apps/users');
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

        session_start();
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

        if (empty($email) || empty($senha)) {
            echo "Erro ao fazer login: Preencha todos os campos.";
            return;
        }

        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getByEmail($email);
        

        if ($usuario && password_verify($senha, $usuario->senha)) {
            $userType = $this->determineUserType($usuario);

            $_SESSION['user'] = [
                'id' => $usuario->id,
                'name' => $usuario->name,
                'email' => $usuario->email,
                'type' => $usuario->user_type
            ];

            $base_url = "/apps";
            header("Location: {$base_url}/{$userType}/dashboard");
            exit();
        } else {
            header('Location: /login?error=1');
            exit();
        }
    }   

    public function logout () 
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location: /apps/login');
        exit();
    }

    public function determineUserType ($usuario) 
    {
        $userType = $usuario->user_type;
        if ($userType == 'admin') {
            header('Location: /apps/admin/dashboard');
        } elseif ($userType == 'advogado') {
            header('Location: /apps/advogado/dashboard');
        } elseif ($userType == 'secretario') {
            header('Location: /apps/secretario/dashboard');
        }

        return $userType;
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