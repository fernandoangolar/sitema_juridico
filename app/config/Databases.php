<?php 


class Databases 
{
    private static $conn;

    private function __construct() {}

    public static function getConnection() {
        if (!self::$conn) {
            // Configurações do banco de dados (substitua com as suas configurações)
            $host = 'localhost';
            $usuario = 'root';
            $senha = '';
            $banco = 'sistema_juridico';

            $dsn = "mysql:host=$host;dbname=$banco;charset=utf8";

            try {
                self::$conn = new \PDO($dsn, $usuario, $senha);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$conn;
    }
}