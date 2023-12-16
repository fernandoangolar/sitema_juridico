<?php 

require_once __DIR__ . '/../Model/DAO/CasoDAO.php';
require_once __DIR__ . '/../Model/DTO/CasoDTO.php';
require_once __DIR__ . '/../Model/DTO/DocumentoDTO.php';

class CasoController 
{

    private $casoDAO;
    private $documentoDAO;

    public function __construct()
    {
        $this->casoDAO = new CasoDAO;
        $this->documentoDAO = new DocumentoDAO();
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;

            if (empty($descricao)) {
                echo "Falha ao criar Caso: Preencha todos os campos.";
                return;
            }

            $casoDTO = new CasoDTO();
            $casoDTO->setDescricao($descricao);

            $documentos = [];
            
            $documentoId = isset($_POST['documento']) ? $_POST['documento'] : null;
            
            
            if ($documentoId) {
                $documentoDTO = new DocumentoDTO();
                $documentoDTO->setId($documentoId);
                $documentos[] = $documentoDTO;
            }
        
            $success = $this->casoDAO->create($casoDTO, $documentos);

            if ($success) {
                header('Location: /apps/caso/show');
            } else {
                echo "Falha ao criar Caso";
            }
        } else {
            echo "Requisição inválida";
        }
    }

    public function showDashboard()
    {
        include './View/secretario/dashboard.php';
    }

    public function getDocumentoDAO() {
        return $this->documentoDAO;
    }
    
}
