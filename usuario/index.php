<?php

  include_once "varUsuario.php";
  include_once "funcUsuario.php";

  session_start();

  if(isset($_SESSION["formulario"])){ //!isset($_SESSION["formulario"])
    if(!$_SESSION["formulario"]){
    }else{
      include_once "Perfil.php";
    }
  }else{
    include_once 'modalBody.php';
  }


?>
