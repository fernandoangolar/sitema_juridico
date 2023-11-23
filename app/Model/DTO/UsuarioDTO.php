<?php 

class UsuarioDTO
{
    public $id;
    public $name;
    public $email;
    public $senha;
    public $user_type;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        
    }

    // public function __construct($id, $nome, $email, $senha)
    // {
    //     $this->id = $id;
    //     $this->nome = $nome;
    //     $this->email = $email;
    //     $this->senha = $senha;
    // }

    public function getId() 
    {
        return $this->id;
    }

    public function setId ($id) 
    {
        $this->id = $id;
    }

    public function getName () {
        return $this->name;
    }

    public function setName ($name) {
        $this->name = $name;
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
    
    public function getSenhaHash() {
        return $this->senha;
    }

}