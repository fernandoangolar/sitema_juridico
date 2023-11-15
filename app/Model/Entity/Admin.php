<?php 

namespace app\Model\Entity;

class Admin 
{
    private $id;
    private $nome;
    private $senha;

    public function __construct($id, $nome, $senha)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getId () {
        return $this->id;
    }

    public function setId ( $id ) {
        $this->id = $id;
    }

    public function getNome () {
        return $this->nome;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getSenha () {
        return $this->senha;
    }

    public function setSenha ($senha) {
        $this->senha = $senha;
    }
}