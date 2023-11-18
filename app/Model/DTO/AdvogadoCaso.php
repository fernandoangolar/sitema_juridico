<?php 

class AdvogadoCaso 
{
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $advogado;
    private $caso;

    public function __construct($id, $nome, $senha, $email, AdvogadoDTO $advogado, CasoDTO $caso)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->advogado = $advogado;
        $this->caso = $caso;

        $advogado->addCasos($caso);
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getAdvogado ()
    {
        return $this->advogado;
    }

    public function setAdvogado ($advogado)
    {
        $this->advogado = $advogado;
    }

    public function getCaso ()
    {
        return $this->caso;
    }

    public function setCaso ($caso)
    {
        $this->caso = $caso;
    }

    public function getNome () {
        return $this->nome;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function getSenha () {
        return $this->senha;
    }

    public function setSenha ($senha) {
        $this->senha = $senha;
    }
}