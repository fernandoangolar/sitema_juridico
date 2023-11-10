<?php 

    class ClienteController 
    {
        
        public static function index () 
        {
            include 'Model/ClienteModel.php';

            $model = new ClienteModel();
            $model->getAllRows();

            include 'View/modules/Cliente/ListageCliente.php';
        } 

        public static function form ()
        {
            include 'View/modules/Cliente/FormCliente.php';
        }

        public static function save () {
            include 'Model/ClienteModel.php';

            $model = new ClienteModel();
            $model->nome = $_POST['nome'];
            $model->email = $_POST['email'];

            $model->save();

            header("Location: /cliente");
        }
    }
?>