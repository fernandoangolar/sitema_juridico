<?php 

namespace app\Model\Entity;

class Cliente 
{
    private $id;
    private $nome;
    private $bairro;
    private $rua;
    private $cidade;
    private $email;
    

    public function __construct($id, $nome, $bairro, $rua, $cidade, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->email = $email;
    }
}