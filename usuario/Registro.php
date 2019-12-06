<?php
  $nombre = "Registro";
  $seleccion = NULL;

  if($_POST){
    session_start();
      if(!igualesPass($_POST["Password"] ,$_POST["Confirmar"])) {
        $_SESSION["errores"]["Password"] = "Las contraseñas no coinciden";
      }
      foreach ($_POST as $valor) {
        if(!minMax(3,15,$valor)){
          $_SESSION["errores"]["Password"] = "Ingresa un valor entre 3 y 15 caracteres";
        }
      }
      if(!esMail($_POST["Correo"])){
        $_SESSION["errores"]["Correo"] = "Ingresa una dirección de correo válida";
      }
      if(count($_SESSION["errores"]) == 0){
        if(registrarUsuario($tempUsuario)){
          $_SESSION["formulario"] = true;                                       // Se completo el formulario sin errores.
          echo "<script> alert(\" Ha sido registrado.\"); </script>";
        }else{
          echo "<script> alert(\" Ya existe esa cuenta.\"); </script>";
        }
      }else{
        $_SESSION["formulario"] = false;                                        // El formulario tiene errores.
      }
    }else{
      include "modalForm.php";
    }
?>
