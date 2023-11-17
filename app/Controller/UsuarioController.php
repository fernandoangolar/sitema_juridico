<?php  

namespace App\Controller;

include_once __DIR__ . "/../auth/login.php";

use App\Model\DAO\UsuarioDAO;
use App\Model\DTO\UsuarioDTO;

class UsuarioController 
{
    private $usuarioDAO;

    public function __construct()
    {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];  

            // Adicione lógica para verificar as credenciais no banco de dados ou onde quer que estejam armazenadas
            if ($this->verificarCredenciais($username, $password)) {
                // Inicie a sessão e redirecione para a página principal
                session_start();
                $_SESSION["usuario"] = $username;
                header("Location: index.php");
                exit();
            } else {
                // Credenciais inválidas, exiba uma mensagem de erro
                $erroLogin = "Credenciais inválidas. Tente novamente.";
            }
        }

        include '../auth/login.php';

    }

    public function show ($id) 
    {
        $usuarios = $this->usuarioDAO->getById($id);

        if ($usuarios) {
            // Renderize a view com os detalhes do usuário
            include_once 'View/usuario/details.php';
        } else {
            // Lógica para lidar com usuário não encontrado
            echo "Usuário não encontrado!";
        }
    }

    public function create ($user)
    {
        $usuarioDTO = new UsuarioDTO();

        $usuarioDTO->setNome( $user['nome']);
        $usuarioDTO->setEmail( $user['email']);
        $usuarioDTO->setSenha( $user['senha']);

        $success = $this->usuarioDAO->insert($usuarioDTO);

        if ($success )
        {
            echo "Usuário criado com secesso";
        } else 
        {
            echo "Falha ao criar usuário";
        }
    }

    public function update ()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $acao = $_POST['acao'];
        
            if ($acao === 'update') {
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
        
                // Lógica para realizar a atualização no banco de dados
                $usuarioDAO = new UsuarioDAO();
                $atualizadoComSucesso = $usuarioDAO->update($id, $nome, $email);
        
                if ($atualizadoComSucesso) {
                    // Redirecionar para a página de detalhes após a atualização
                    header("Location:  usuario/detalhes.php?id=" . $id);
                    exit();
                } else {
                    // Lógica para lidar com falha na atualização
                    echo "Falha ao atualizar o usuário!";
                }
            }
        }

    }

    public function delete($id)
    {
        $success = $this->usuarioDAO->detele($id);

        if ($success )
        {
            echo "Usuário criado com secesso";
        } else 
        {
            echo "Falha ao criar usuário";
        }
    }


    private function verificarCredenciais($username, $password) {
        // Substitua esta lógica com a autenticação real usando um banco de dados
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->obterUsuarioPorNome($username);
    
        if ($usuario && password_verify($password, $usuario->getSenhaHash())) {
            // As credenciais são válidas
            return true;
        }
    
        // Credenciais inválidas
        return false;
    }
}