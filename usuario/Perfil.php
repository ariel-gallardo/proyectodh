<?php
if ($_GET || $_POST) {
    $data = json_decode(file_get_contents("../db/usuarios.json"), true);
    foreach ($data as $usuario) {
        if ($usuario["Correo"] == $_GET["Correo"] || $usuario["Correo"] == $_POST["Correo"]) {
            $result = $usuario;
        }
    }
}
?>
<?php if (isset($result)) { ?>
        <form action='perfil.php' method='post'>
            <div class="container pt-4">
                <h1>Perfil de usuario</h1>
                <div class="row">
                    <div class="col-4">
                        <img src="imagenes/<?= $result["Correo"] ?>.jpg" alt="" style="height:100%; width: 100%;">
                    </div>
                    <div class="col-8">
                        <p>
                            Nombre: <?= $result["Nombre"] ?? "" ?>
                        </p>
                        <p>
                            Apellido: <?= $result["Apellido"] ?? "" ?>
                        </p>
                        <p>
                            Documento: <?= $result["Documento"] ?? "" ?>
                        </p>
                        <p>
                            Email: <?= $result["Correo"] ?? "" ?>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    <?php } else {
        echo "<h1>No hay usuario.</h1>";
    } ?>
