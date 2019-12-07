<?php

  function verificarPassword($Password,$Confirmar){
    if(!minMax(3,15,$Password)){
        $_SESSION["errores"]["Password"] = "Entre 3 y 15 caracteres";
    }
    if(!minMax(3,15,$Confirmar)){
        $_SESSION["errores"]["Password"] = "Entre 3 y 15 caracteres";
    }
    if(!igualesPass($Password ,$Confirmar)){
      $_SESSION["errores"]["Password"] = "No coincide con la verificacion";
      $_SESSION["errores"]["Confirmar"] = "No coincide con la contraseña";
    }
  }

  session_destroy();
  session_start();
  $nombre = "Registro";
  $seleccion = NULL;

  if($_POST){
    session_start();
      verificarPassword($_POST["Password"],$_POST["Confirmar"]);
      if(!esMail($_POST["Correo"])){
        $_SESSION["errores"]["Correo"] = "Correo inválido";
      }
      if(count($_SESSION["errores"]) == 0){
        if(registrarUsuario()){
          $_SESSION["formulario"] = true;
          echo "<script> alert(\" Ha sido registrado.\"); </script>";
        }else{
          echo "<script> alert(\" Ya existe esa cuenta.\"); </script>";
        }
      }else{
        $_SESSION["formulario"] = false;
      }
    }else{
      include "modalForm.php";
    }
?>
