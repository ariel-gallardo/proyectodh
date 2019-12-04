<?php
  $nombre = "Registro";
  $registros = [
      ["tipo" =>     "text", "nombre" =>     "Nombre", "mensaje" =>           "Nombre"],
      ["tipo" =>     "text", "nombre" =>   "Apellido", "mensaje" =>         "Apellido"],
      ["tipo" =>     "text", "nombre" =>  "Documento", "mensaje" =>        "Documento"],
      ["tipo" =>    "email", "nombre" =>     "Correo", "mensaje" => "Correo@Email.com"],
      ["tipo" => "password", "nombre" =>   "Password", "mensaje" =>         "********"],
      ["tipo" => "password", "nombre" =>  "Confirmar", "mensaje" =>         "********"]
  ];
    if($_POST){
      if($_POST["Password"] == $_POST["Confirmar"]){
        $db = file_get_contents("../db/usuarios.json"); $tempUser = file_get_contents("../db/usuarios.txt");
        $db = json_decode($db,true);
        $datos = [];
        foreach ($registros as $registro) {
          if($registro["nombre"] == "Confirmar"){break;}
          if($registro["nombre"] == "Correo"){
            file_put_contents("../db/usuarios.txt",$tempUser."\n".$_POST[$registro["nombre"]]);
          }
          $datos[$registro["nombre"]] = $_POST[$registro["nombre"]];
        }
        $db[] = $datos;
        file_put_contents("../db/usuarios.json",json_encode($db));
      }
      else{
        echo "Las contraseñas no coinciden";
      }
    }
    else{
      include "modalForm.php";
    }
?>
