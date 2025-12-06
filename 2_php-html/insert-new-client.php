<?php

require 'functions/clients.php';

$name = $_POST['name'];
$age = $_POST['age'];

insertClient($name, $age);
