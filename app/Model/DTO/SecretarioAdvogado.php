<?php 

namespace app\Model\DTO;

class SecretarioAvogado 
{

    private $id;
    private $secretario;
    private $advogado;

    public function __construct($id, SecretarioDTO $secretario, AdvogadoDTO $advogado)
    {
        $this->id = $id;
        $this->secretario = $secretario;
        $this->advogado = $advogado;

        $secretario->addAdvogado($advogado);
    }

    public function getId () {
        return $this->id;
    }

    public function setId ( $id ) {
        $this->id = $id;
    }

    public function getSecretario ()
    {
        return $this->secretario;
    }

    public function setSecretario ($secretario)
    {
        $this->secretario = $secretario;
    }

    public function getAdvogado ()
    {
        return $this->advogado;
    }

    public function setAdvogado ($advogado)
    {
        $this->advogado = $advogado;
    }

}