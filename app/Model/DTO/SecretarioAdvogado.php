<?php 

<<<<<<< HEAD
=======
namespace App\Model\DTO;
>>>>>>> 0d78d048c9679768addf2688771d5d00d3fde26c

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