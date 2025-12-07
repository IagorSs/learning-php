<?php
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

    <hr>

    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </thead>
        <tbody></tbody>
            <?php foreach(getClients() as $client) : ?>
                <tr>
                    <td><?php echo $client['id'] ?></td>
                    <td><?php echo $client['name'] ?></td>
                    <td><?php echo $client['age'] . ' ano' . ($client['age'] >= 2 ? 's' : '') ?></td>
                    <td>
                        <a href="./pages/edit-client.php?id=<?php echo $client['id'] ?>">Editar</a>
                        <a href="./pages/delete-client.php?id=<?php echo $client['id'] ?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <h2>Criar novo cliente</h2>

    <form action="./pages/insert-new-client.php" method="post">
        <input type="text" name="name" id="input-name" placeholder="Nome">
        <input type="number" name="age" id="input-age" placeholder="Idade">

        <button type="submit">Criar</button>
    </form>
</body>
</html>