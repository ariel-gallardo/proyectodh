<?php

  include_once "varUsuario.php";
  include_once "funcUsuario.php";

  session_start();
  include_once 'modalBody.php';
  if(isset($_SESSION["formulario"])){

    if(!$_SESSION["formulario"]){                                               

      echo "<script> $(function() {  $('#modalLoginForm').modal('show'); }); </script>";
      include_once "modalForm.php";
    }else{
      include_once "Perfil.php";
    }
  }

?>
