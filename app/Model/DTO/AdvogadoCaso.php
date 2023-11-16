<?php 

namespace app\Model\DTO;

use app\Model\DTO\AdvogadoDTO;

class AdvogadoCaso 
{
    private $id;
    private $advogado;
    private $caso;

    public function __construct($id, AdvogadoDTO $advogado, CasoDTO $caso)
    {
        $this->id = $id;
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
}