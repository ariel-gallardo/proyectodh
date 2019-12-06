<?php
  $db = getDB();
  $usuario = getUsuario($_GET ? $_GET["Correo"] : $_POST["Correo"], $db );
  $seleccion = [];
  if (isset($usuario)) {
    echo "Hello";
    include "modalForm.php";
  } else { echo "<h1>No existe el perfil seleccionado</h1>"};
?>
