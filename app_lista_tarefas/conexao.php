<?php

class Conexao {

    private $host = 'localhost';
    private $dbname = 'php_com_pdo';
    private $user = 'postgres';
    private $pass = 'P@55w0rd';

    public function conectar() {
        try {

            $conexao = new PDO(
                "pgsql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>' .$e->getMessage(). '</p>';
        }
    }
}

?>