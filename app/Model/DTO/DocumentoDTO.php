<?php 


class DocumentoDTO
{
    private $id;
    private $titulo;
    private $data_criacao;
    private $tipo;

    // public function __construct($id, $titulo, $data_criacao, $tipo)
    // {
    //     $this->id = $id;
    //     $this->titulo = $titulo;
    //     $this->data_criacao = $data_criacao;
    //     $this->tipo = $tipo;
    // }

    public function __construct()
    {
        
    }

    public function getId () {
        return $this->id;
    }

    public function setId ($id) {
        $this->id = $id;
    }

    public function getTitulo () {
        return $this->titulo;
    }

    public function setTitulo ($titulo) {
        $this->titulo = $titulo;
    }

    public function getDataCricao () {
        return $this->data_criacao;
    }

    public function setDataCricao ($data_criacao) {
        $this->data_criacao = $data_criacao;
    }

    public function getTipo () {
        return $this->tipo;
    }

    public function setTipo ($tipo) {
        $this->tipo = $tipo;
    }
}