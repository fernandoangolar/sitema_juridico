<?php

require_once __DIR__ . '/../DTO/UsuarioDTO.php';

class UsuarioDAO 
{
    private $conn;

    public function __construct()
    {
        $this->conn =  Database::getConnection();
    }


    public function insert (UsuarioDTO $usuario)
    {

        try {
            if ( $this->emailExiste($usuario->getEmail()) ) 
            {
                return false;
            }

            $stmt = $this->conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?) ");
            $stmt->bind_param("sss", $usuario->getNome(), $usuario->getEmail(), $usuario->getSenha());

            return $stmt->execute();
        } catch (\Throwable $th ) 
        {
            error_log("Erro na execução do código: " . $th->getMessage());
        }
      
    }

    public function getById ($id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
            $stmt->bind_parem("i", $id);

            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } catch (\Throwable $th)
        {
            error_log("Erro na execução do código: " . $th->getMessage());
        }
    }

    public function update (UsuarioDTO $usuario)
    {
        try {

            if ( $this->emailExiste($usuario->getEmail(), $usuario->getId()) ) 
            {
                return false;
            }

            $stmt = $this->conn->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id_usuario = ?");
            $stmt->bind_param("sssi", $usuario->getNome(), $usuario->getEmail(), $usuario->getSenha(), $usuario->getId());

            return $stmt->execute();
        } catch (\Throwable $th )
        {
            error_log("Erro na execução do código: " . $th->getMessage());
        }
    }

    public function detele ($id)
    {
        try 
        {
            $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario = >");
            $stmt->bind_param("i", $id);

            return $stmt->execute();
        } catch (\Throwable $th)
        {
            error_log("Erro na execução do código: " . $th->getMessage());
        }
    }


    private function emailExiste ( $email, $excludeId = null )
    {
        $stmt = null;
        if ( $excludeId )
        {
            $stmt = $this->conn->prepare("SELECT COUNT(*) as count FROM usuarios WHERE email = ? AND id != ? ");
            $stmt->bind_param("si", $email, $excludeId);
        } else 
        {
            $stmt = $this->conn->prepare("SELECT COUNT(*) as count FROM usuarios WHERE email = ?");
            $stmt->bind_param("s", $email);
        }


        // $stmt->execute();: Executa a consulta preparada, onde $stmt é um objeto da classe mysqli_stmt que representa uma declaração SQL preparada.

        // $result = $stmt->get_result();: Obtém o resultado da consulta executada como um objeto mysqli_result. Este objeto contém os dados retornados pela consulta.

        // $count = $result->fetch_assoc()['count'];: Obtém uma linha do resultado como uma matriz associativa e, em seguida, acessa o valor associado à chave 'count'. Geralmente, essa chave é um alias ou o nome da coluna que contém a contagem de resultados.

        // return $count > 0;: Retorna true se a contagem de registros (usuários) com o e-mail fornecido for maior que zero, indicando que o e-mail já existe na tabela. Caso contrário, retorna false, indicando que o e-mail ainda não foi registrado.
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['count'];

        return $count > 0;
    }
}