<?php
  $usuario = getUsuario(getUsuario($_GET ? $_GET["Correo"] : $_POST["Correo"]), getDB());
?>

<?php if (isset($usuario)) {?>

  <div class="col-4">
    <img src="img/<?= $usuario["Correo"] ?>.jpg" alt="" style="height:100%; width: 100%;">
  </div>

<?php include "modalForm.php";} else {
        echo "<h1>No existe el perfil seleccionado</h1>";
} ?>
