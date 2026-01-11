<?php

function connect(): PDO {
    try {
        $pdo = new PDO(
            'mysql:host=mysql-environment;dbname=sampledb;charset=utf8',
            'root',
            'rootpassword'
        );

        return $pdo;
    } catch (\Throwable $th) {
        echo "Erro na conexão: " . $th->getMessage();

        throw $th;
    }
}
