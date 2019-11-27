<?php
    if($_POST){

    }
    else{
      $nombre = "Registro";
      $registros = [
          ["tipo" =>     "text", "nombre" =>     "Nombre", "mensaje" =>           "Nombre"],
          ["tipo" =>     "text", "nombre" =>   "Apellido", "mensaje" =>         "Apellido"],
          ["tipo" =>     "text", "nombre" =>  "Documento", "mensaje" =>        "Documento"],
          ["tipo" =>     "text", "nombre" =>     "Correo", "mensaje" => "Correo@Email.com"],
          ["tipo" => "password", "nombre" =>   "Password", "mensaje" =>         "********"],
          ["tipo" => "password", "nombre" =>  "Confirmar", "mensaje" =>         "********"]
      ];
      include "modalForm.php";
    }
?>
