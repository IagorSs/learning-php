<?php

function getFruits(): void {
    $fruits = [
        'maçã',
        'banana',
        'laranja',
        'uva',
        'pera'
    ];

    foreach ($fruits as $key => $fruit) {
        $currentId = $key + 1;

        echo "<option value='$currentId'>$fruit</option>";
    }
}

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

function getClients(): array {
    $pdo = connect();

    $stmt = $pdo->prepare('SELECT * FROM clients');
    $stmt->execute();

    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $clients;
}

function insertClient(
    string $name,
    int $age
): void {
    $pdo = connect();

    $stmt = $pdo->prepare('INSERT INTO clients (name, age) VALUES (:name, :age)');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':age', $age);
    $stmt->execute();
}
