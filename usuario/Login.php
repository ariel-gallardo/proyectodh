<?php
  $nombre = "Login";
  $seleccion = ["Correo" => $registros["Correo"], "Password" => $registros["Password"]];

  if($_POST){
    if(existeUsuario($_POST["Correo"], getDB())){
      include_once "Perfil.php";
    }
  }else{
    include "modalForm.php";
  }

?>
