<?php

require '../functions/clients.php';

$name = $_POST['name'];
$age = $_POST['age'];
$id = $_POST['id'];

updateClient($id, $name, $age);

header("Location: ../index.php");
