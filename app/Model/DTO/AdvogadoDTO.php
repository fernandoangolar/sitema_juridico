<?php 

namespace App\Model\DTO;


class AdvogadoDTO 
{
    private $id;
    private $nome;
    private $senha;
    private $especializacao;
    private $email;
    private $casos = [];

    public function __construct ($id, $nome, $senha, $especializacao, $email)
    {   
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->especializacao = $especializacao;
        $this->email = $email;
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

    public function getEspecializacao () {
        return $this->especializacao;
    }

    public function setEspecializacao ($especializacao) {
        $this->especializacao = $especializacao;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function addCasos (CasoDTO $casos)
    {
        $this->casos[] = $casos;
    }

    public function getCasos ()
    {
        return $this->casos;
    }

    public function getSenha () {
        return $this->senha;
    }

    public function setSenha ($senha) {
        $this->senha = $senha;
    }
}