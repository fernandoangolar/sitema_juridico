<?php 

    class ClienteDAO 
    {

        private $con;

        public function __construct()
        {
            $dns = "mysql:host=localhost;dbname=sistema_juridico";

            $this->con = new PDO($dns, 'root', '', );
        }

        public function insert (ClienteModel $model) {

            $sql = " INSERT INTO cliente (nome, email) values (?, ?)";

            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);

            $stmt->execute();
        }

        public function update (ClienteModel $model) 
        {}

        public function select () 
        {
            $sql = " SELECT * FROM cliente ";

            $stmt = $this->con->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        
    }

?>