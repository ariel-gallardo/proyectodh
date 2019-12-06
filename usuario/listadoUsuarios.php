<?php
$data = json_decode(file_get_contents("./data.json"), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-4">
        <h1>Listado de Usuarios</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($data["usuarios"] as $value) { ?>
                    <tr>
                        <td><a href="perfil.php?email=<?= $value["email"] ?>"><?= $value["email"] ?></a></td>
                        <td><a href="perfil.php?email=<?= $value["email"] ?>"><?= $value["email"] ?></a></td>
                        <td><a href="perfil.php?email=<?= $value["email"] ?>"><?= $value["username"] ?></a></td>
                    </tr>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>