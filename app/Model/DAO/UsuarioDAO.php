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

            $userType = $this->determineUserType($usuarioDTO);
            $this->updateUseuType($usuarioDTO->getEmail(), $userType);

            echo "Usuário criado com sucesso";
            return true;
        } catch (PDOException $e) {
            $this->conn->rollBack();
            echo "Erro ao criar usuário: " . $e->getMessage();
            return false;
        }
    }

    private function determineUserType(UsuarioDTO $usuarioDTO)
    {
        if (strpos($usuarioDTO->getEmail(), 'admin') !== false ) {
            return 'admin';
        } else if ( strpos($usuarioDTO->getEmail(), 'advogado') !== false ) {
            return 'advogado';
        } else if ( strpos($usuarioDTO->getEmail(), 'secretario') !== false ) {
            return 'secretario';
        } else  {
            echo "Não foi determinado nenhum tipo de usuário";
        }
    }

    private function updateUseuType($email, $userType) {
        
        $stmt = $this->conn->prepare("UPDATE usuarios SET user_type = ? WHERE email = ?");
        $stmt->bindParam(1, $userType);
        $stmt->bindParam(2, $email);

        $stmt->execute();
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