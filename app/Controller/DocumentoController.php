<?php 

require_once __DIR__ . '/../Model/DAO/DocumentoDAO.php';
require_once __DIR__ . '/../Model/DTO/DocumentoDTO.php';

class DocumentoController
{

    private $documentoDAO;

    public function __construct()
    {
        $this->documentoDAO = new DocumentoDAO;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;

            if (empty($titulo) || empty($tipo)) {
                echo "Falha ao criar Documentos: Preencha todos os campos.";
                return;
            }

            $documentoDTO = new DocumentoDTO();

            $documentoDTO->setTitulo($titulo);
            $documentoDTO->setTipo($tipo);

            $success = $this->documentoDAO->saveDocumento($documentoDTO);

            if ($success) {
                header('location: /apps/secretario/show');
            } else {
                echo "Falha ao criar Documentos";
            }

            // if ($success)
            // {
            //     header('location: /apps/showDashboard');
            // } else
            // {
            //     echo "Falha ao criar Documentos";
            // }

        }  else {
            header('Location: /secretario/dashboard');
        }
        
    }

    public function showDashboard()
    {
        include './View/secretario/dashboard.php';
    }
}