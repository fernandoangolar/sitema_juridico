<?php

require_once __DIR__ . '/../../config/Databases.php';
require_once __DIR__ . '/../DTO/UsuarioDTO.php';

class UsuarioDAO 
{
    private $conn;

    public function __construct()
    {
        $this->conn =  Databases::getConnection();
    }

    public function create (UsuarioDTO $usuarioDTO) {
        try {
            $stmtCheck = $this->conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
            $email = $usuarioDTO->getEmail();
            $stmtCheck->bindParam(1, $email);
            $stmtCheck->execute();
    
            if ($stmtCheck->fetchColumn() > 0) {
                echo "Erro ao criar usuário: E-mail já está em uso.";
                return false;
            }
    
            $stmt = $this->conn->prepare("INSERT INTO usuarios (name, email, senha) VALUES (?, ?, ?)");
            $name = $usuarioDTO->getName();

            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
    
            $hashedPassword = password_hash($usuarioDTO->getSenha(), PASSWORD_DEFAULT);
            $stmt->bindParam(3, $hashedPassword);
    
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Erro ao criar usuário: " . $e->getMessage();
            return false;
        }
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByEmail($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
  

}