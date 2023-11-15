<?php 

namespace app\Model\Entity;

class Secretario 
{
    private $id;
    private $nome;
    private $cargo;

    public function __construct($id, $nome, $cargo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
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

    public function getCargo () {
        return $this->cargo;
    }

    public function setCargo ($cargo) {
        $this->cargo = $cargo;
    }
}