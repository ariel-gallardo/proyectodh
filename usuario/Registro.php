<?php

  $nombre = "Registro";
  $seleccion = NULL;

    if($_POST){
      $tempUsuario = generarUsuario();
      if($tempUsuario["Password"] == $_POST["Confirmar"]){
        $db = file_get_contents("../db/usuarios.txt");
        if(registrarUsuario($tempUsuario)){
          echo "Usuario Registrado";
        }
      }
      else{
        echo "Las contraseñas no coinciden";
      }
    }else{
      include "modalForm.php";
    }

?>
