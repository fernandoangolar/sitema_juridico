<?php 

namespace app\Model\Entity;

class Advogado 
{
    private $id;
    private $nome;
    private $especializacao;

    public function __construct ($id, $nome, $especializacao)
    {   
        $this->id = $id;
        $this->nome = $nome;
        $this->especializacao = $especializacao;
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
}