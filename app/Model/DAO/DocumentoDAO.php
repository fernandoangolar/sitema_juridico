<?php 

require_once __DIR__ . '/../../config/Databases.php';
require_once __DIR__ . '/../DTO/DocumentoDTO.php';

class DocumentoDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn =  Databases::getConnection();
    }

    public function saveDocumento(DocumentoDTO $documentoDTO) {
        try {
         
            
            $stmt = $this->conn->prepare("INSERT INTO documentos (titulo, tipo) VALUES (?, ?)");
            $titulo = $documentoDTO->getTitulo();
            $tipo = $documentoDTO->getTipo();
            $stmt->bindParam(1, $titulo);
            $stmt->bindParam(2, $tipo);

            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Erro ao associar documento ao caso: " . $e->getMessage();
            return false;
        }
    }


    public function getAllDocumentos()
    {
        $stmt = $this->conn->prepare("SELECT * FROM documentos");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}