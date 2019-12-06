<?php

  $nombre = "Registro";
  $seleccion = NULL;

    if($_POST){
      $tempUsuario = generarUsuario();
      if($tempUsuario["Password"] == $_POST["Confirmar"]){
        if(registrarUsuario($tempUsuario)){
          session_start();
          $_SESSION["formulario"] = true;
          echo "<script> alert(\" a sido registrado.\") </script>";
        }else{
          echo "<script> alert(\" No se pudo registrar.\") </script>";
        }
      }
      else{
        echo "Las contraseñas no coinciden";
      }
    }else{
      include "modalForm.php";
    }

?>
