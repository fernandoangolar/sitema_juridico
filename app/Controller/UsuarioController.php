<?php

require_once __DIR__ . '/../Model/DTO/UsuarioDTO.php';

class UsuarioController 
{
    private $usuarioDAO;

    public function __construct()
    {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function show ($id) 
    {
        $usuarios = $this->usuarioDAO->getById($id);
        echo  "Angolar <br> ";
        echo json_encode($usuarios);
    }

    public function create ($user)
    {

        echo "Programando";
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

    public function update ($id, $user)
    {
        $usuarioDTO = new UsuarioDTO();
        $usuarioDTO->setId($id);
        $usuarioDTO->setNome( $user['nome']);
        $usuarioDTO->setEmail( $user['email']);
        $usuarioDTO->setSenha( $user['senha']);

        $success = $this->usuarioDAO->update($usuarioDTO);

        if ($success )
        {
            echo "Usuário criado com secesso";
        } else 
        {
            echo "Falha ao criar usuário";
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
}