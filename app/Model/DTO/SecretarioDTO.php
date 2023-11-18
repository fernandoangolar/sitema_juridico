<?php 


class SecretarioDTO 
{
    private $id;
    private $nome;
    private $senha;
    private $cargo;
    private $email;
    private $advogados = [];

    public function __construct($id, $nome, $senha, $cargo, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->cargo = $cargo;
        $this->$email = $email;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function addAdvogado (AdvogadoDTO $advogado) {
        $this->advogados [] = $advogado;
    }

    public function getAdvogado () 
    {
        return $this->advogados;
    }

    public function getSenha () {
        return $this->senha;
    }

    public function setSenha ($senha) {
        $this->senha = $senha;
    }
}