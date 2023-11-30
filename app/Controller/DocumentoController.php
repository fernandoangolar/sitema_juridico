<?php 

require_once __DIR__ . '/../Model/DAO/DocumentoDAO.php';

class DocumentoController 
{

    private $documentoDAO;

    public function __construct()
    {
        $this->documentoDAO = new DocumentoDAO;
    }
}
?>