<?php
    require "functions/fruits.php";
    require "functions/clients.php";

    $title = 'Título de mentirinha!';
    $mensagem = "Olá, seja bem-vindo ao meu site!"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <h1>
        <?php echo $mensagem; ?>
    </h1>


    <form action="" method="post">
        <label for="age-selector">Selecione uma idade</label>
        <select name="" id="age-selector">
            <option value="">Selecione uma opção</option>
            <?php for ($i = 1; $i <= 100; $i++) : ?>
                <option value="<?php echo $i ?>"><?php echo $i . ' ano' . ($i >= 2 ? 's' : '') ?></option>
            <?php endfor; ?>
        </select>

        </br>

        
        <label for="fruits-selector">Selecione uma fruta</label>
        <select name="" id="fruits-selector">
            <option value="">Selecione uma opção</option>
            <?php getFruits() ?>
        </select>
    </form>

    <hr>

    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody></tbody>
            <?php foreach(getClients() as $client) : ?>
                <tr>
                    <td><?php echo $client['id'] ?></td>
                    <td><?php echo $client['name'] ?></td>
                    <td><?php echo $client['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form action="./insert-new-client.php" method="post">
        <input type="text" name="name" id="input-name" placeholder="Insira seu nome">
        <input type="number" name="age" id="input-age" placeholder="Insira sua idade">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>