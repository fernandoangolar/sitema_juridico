<?php 

require_once __DIR__ . '/../Model/DAO/CAsoDAO.php';

    class CasoController {

        private $casoDAO;

        public function __construct()
        {
            $this->casoDAO = new CasoDAO;
        }
    }
?>