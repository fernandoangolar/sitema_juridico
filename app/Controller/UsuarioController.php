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

            // Validar os dados do formulário (adapte conforme necessário)
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

    public function showform()
    {
        // Aqui você renderizaria a view do formulário
        include './View/usuario/formulario.php';
    }

    public function login($user)
    {
        $email = isset($user['email']) ? $user['email'] : null;
        $senha = isset($user['senha']) ? $user['senha'] : null;

        // Validação básica
        if (empty($email) || empty($senha)) {
            echo "Erro ao fazer login: Preencha todos os campos.";
            return;
        }

        // Verificar se o usuário existe no banco de dados
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getByEmail($email);

        if ($usuario && password_verify($senha, $usuario->getSenha())) {
            // Login bem-sucedido
            // Redirecione para a página inicial ou para onde desejar
            header('Location: /');
            exit();
        } else {
            // Exiba mensagem de erro ou redirecione de volta para o formulário de login
            header('Location: /login?error=1');
            exit();
        }
    }   


    public function showLoginForm()
    {
        // Aqui você renderizaria a view do formulário de login
        include './View/usuario/formulario_login.php';
    }

    public function showUserDetails()
    {
        $listaUsuarios = $this->usuarioDAO->getAllUsers();

        require './View/usuario/details_usuarios.php';
    }
}