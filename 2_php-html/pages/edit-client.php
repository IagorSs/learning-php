<?php
    require '../functions/clients.php';
    $id = $_GET['id'];
    $client = getClient($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit-client.css">
    <title>Document</title>
</head>
<body>
    <h3>Editando cliente</h3>
    
    <form action="./update-client.php" method="post">
        <div class="input-group">
            <label for="edit-client_input-id">ID</label>
            <input id="edit-client_input-id" type="text" name="id" value="<?php echo $client['id'] ?>" readonly>
        </div>
    
        <div class="input-group">
            <label for="edit-client_input-name">Nome</label>
            <input type="text" name="name" id="edit-client_input-name" value="<?php echo $client['name'] ?>">
        </div>
    
        <div class="input-group">
            <label for="edit-client_input-age">Idade</label>
            <input type="number" name="age" id="edit-client_input-age" value="<?php echo $client['age'] ?>">
        </div>
    
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
