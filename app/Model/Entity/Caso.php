<?php 

namespace app\Model\Entity;

class Caso 
{
    private $numero_processo;
    private $descricao;
    private $data_abertura;
    private $data_fechamento;

    public function __construct($numero_processo, $descricao,  $data_abertura, $data_fechamento)
    {
        $this->numero_processo = $numero_processo;
        $this->descricao = $descricao;
        $this->data_abertura = $data_abertura;
        $this->data_fechamento = $data_fechamento;
    }

    public function getNumeroProcesso () {
        return $this->numero_processo;
    }

    public function setNumeroProcesso ($numero_processo) {
        $this->numero_processo = $numero_processo;
    }

    public function getDescricao () {
        return $this->descricao;
    }

    public function setDescricao ($descricao) {
        $this->descricao = $descricao;
    }

    public function getDataAbertura () {
        return $this->data_abertura;
    }

    public function setDataAbertura ($data_abertura) {
        $this->data_abertura = $data_abertura;
    } 

    public function getDataFechamento () {
        return $this->data_fechamento;
    }

    public function setDataFechamento ($data_fechamento) {
        $this->data_fechamento = $data_fechamento;
    }
}