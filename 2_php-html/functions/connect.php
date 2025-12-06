<?php

function connect(): PDO {
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=teste;charset=utf8',
            'root',
            ''
        );

        return $pdo;
    } catch (\Throwable $th) {
        echo "Erro na conexão: " . $th->getMessage();

        throw $th;
    }
}
