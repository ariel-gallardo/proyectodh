<?php

  $nombre = "Registro";
  $seleccion = NULL;

//////// FALTA ARREGLAR LOS CONDICIONALES PARA QUE PASE SI NO TIENE ERRORES EN EL ARRAY $ERRORES
    if($_POST){
    if(count($errores) == 0){


      if(igualesPass($_POST["Password"] ,$_POST["Confirmar"])) {
          $errores [] = "Las contraseñas no coinciden";
        }
      foreach ($_POST as $valor) {
        if(!minMax(3,15,$valor)){
          $errores [] = "Ingresa un valor entre 3 y 15 caracteres";
        }
      }


    if(esMail($POST["Correo"])){
      $errores [] = "Ingresa una dirección de correo válida";
    }
    if(esNulo($POST["Nombre"],$POST["Apellido"],$POST["Documento"],
    $POST["Correo"],$POST["Password"],$POST["Confirmar"])){
      $errores = "Por favor, complete todos los campos";
    }

        if(registrarUsuario($tempUsuario)){
          session_start();
          $_SESSION["formulario"] = true;
          echo "<script> alert(\" Ha sido registrado.\") </script>";
        }else{
          $errores[] = "Ya existe una cuenta registrada con ese email";
        }

    }else{
      include "modalForm.php";
    }

?>
