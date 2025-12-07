<?php

require 'connect.php';

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

function getClient($id): mixed {
    $pdo = connect();

    $stmt = $pdo->prepare('SELECT * FROM clients WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    $client = $stmt->fetch(PDO::FETCH_ASSOC);

    return $client;
}
