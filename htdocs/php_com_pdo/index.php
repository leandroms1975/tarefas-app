<?php

    $dsn = 'pgsql:host=localhost;dbname=php_com_pdo';
    $usuario = 'postgres';
    $senha = 'P@55w0rd';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = "
                SELECT * FROM tb_usuarios
        ";

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchALL();
        
        echo '<pre>';
        print_r($lista);
        echo '</pre>';
       

    } catch (PDOException $e) {
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
        //registrar erro
    }
?>