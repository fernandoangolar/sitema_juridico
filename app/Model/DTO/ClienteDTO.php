<?php 

namespace app\Model\DTO;

class ClienteDTO 
{
    private $id;
    private $nome;
    private $bairro;
    private $rua;
    private $cidade;
    private $email;
    private $casos = [];
    

    public function __construct($id, $nome, $bairro, $rua, $cidade, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->email = $email;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function setId ($id) 
    {
        $this->id = $id;
    }

    public function getNome () {
        return $this->nome;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getBairro() 
    {
        return $this->bairro;
    }

    public function setBairro ($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getRua () 
    {
        return $this->rua;
    }

    public function setRua ($rua) 
    {
        $this->rua = $rua;
    }

    public function getCidade ()
    {
        return $this->cidade;
    }

    public function setCidade ($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function addCaso (CasoDTO $caso) 
    {
        $this->casos[] = $caso;
    }

    public function getCasos ()
    {
        return $this->casos;
    }
}