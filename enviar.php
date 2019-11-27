<?php
  function generarUsuario(){
    return [
      "Nombre" => $_POST["Nombre"],
      "Apellido" => $_POST["Apellido"],
      "Documento" => $_POST["Documento"],
      "Password" => $_POST["Password"],
      "Correo" => $_POST["Correo"]
    ];
  }
  function registrarUsuario(){
    $usuarios = json_decode(file_get_contents("db/usuarios.json"));
    $usuarios[] = generarUsuario();
    file_put_contents("db/usuarios.json", json_encode($usuarios));
    return true;
  }
  registrarUsuario();
?>
