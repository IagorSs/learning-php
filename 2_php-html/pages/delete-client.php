<?php
require '../functions/clients.php';

$id = $_GET['id'];

deleteClient($id);

header("Location: ../index.php");
