<?php 

require_once __DIR__ . '/../../config/Databases.php';
require_once __DIR__ . '/../DTO/CasoDTO.php';

class CasoDAO 
{
    private $conn;

    public function __construct()
    {
        $this->conn =  Databases::getConnection();
    }

    public function create (CasoDTO $casoDTO, array $documentos) {

        // try {
        //     $stmt = $this->conn->prepare("INSERT INTO casos (descricao) VALUES (?)");
        //     $descricao = $casoDTO->getDescricao();
    
        //     $stmt->bindParam(1, $descricao);
        //     $stmt->execute();

        //     $casoId = $this->conn->lastInsertId();

        //     foreach ($documentos as $documento) {
        //         $casoDTO->addDocumento($documento);
        //     }

        //     echo "Caso criado com sucesso";
        // } catch ( PDOException $e ) {
        //     // $this->conn->rollBack();
        //     echo "Erro ao criar Caso: " . $e->getMessage();
        //     return false;
        // }

        try {
            $this->conn->beginTransaction();
    
            $stmt = $this->conn->prepare("INSERT INTO casos (descricao) VALUES (?)");
            $descricao = $casoDTO->getDescricao();
            $stmt->bindParam(1, $descricao);
            $stmt->execute();
    
            $casoId = $this->conn->lastInsertId();
    
            // foreach ($documentos as $documentoId) {
            //     $stmt = $this->conn->prepare("UPDATE casos SET id_ducumentos = ? WHERE id_caso = ?");
            //     $stmt->bindParam(1, $documentoId);
            //     $stmt->bindParam(2, $casoId);
            //     $stmt->execute();
            // }

            foreach ($documentos as $documento) {
                $documentoId = $documento->getId();
                $stmt = $this->conn->prepare("UPDATE casos SET id_documentos = ? WHERE numero_processo = ?");
                $stmt->bindParam(1, $documentoId, PDO::PARAM_INT);
                $stmt->bindParam(2, $casoId, PDO::PARAM_INT);
                $stmt->execute();
            }
    
            $this->conn->commit();
    
            echo "Caso criado com sucesso";
            return true;
        } catch (PDOException $e) {
            $this->conn->rollBack();
            echo "Erro ao criar Caso: " . $e->getMessage();
            return false;
        }
    }



    private function saveDocumento(DocumentoDTO $documentoDTO) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO documentos (titulo, tipo) VALUES (?, ?)");
            $titulo = $documentoDTO->getTitulo();
            $tipo = $documentoDTO->getTipo();

            $stmt->bindParam(1, $titulo);
            $stmt->bindParam(2, $tipo);
            $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao associar documento ao caso: " . $e->getMessage();
        }
    }
}