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
            // Verificar se o e-mail já existe no banco de dados
            $stmtCheck = $this->conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
            $email = $usuarioDTO->getEmail();
            $stmtCheck->bindParam(1, $email);
            $stmtCheck->execute();
    
            if ($stmtCheck->fetchColumn() > 0) {
                // O e-mail já está em uso, retornar falso
                echo "Erro ao criar usuário: E-mail já está em uso.";
                return false;
            }
    
            // Preparar a consulta SQL para inserção
            $stmt = $this->conn->prepare("INSERT INTO usuarios (name, email, senha) VALUES (?, ?, ?)");
            $name = $usuarioDTO->getName();

            // Vincular os parâmetros
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
    
            // Hash da senha antes de armazenar no banco de dados
            $hashedPassword = password_hash($usuarioDTO->getSenha(), PASSWORD_DEFAULT);
            $stmt->bindParam(3, $hashedPassword);
    
            // Executar a consulta
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            // Em caso de erro, exibir mensagem e retornar falso
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