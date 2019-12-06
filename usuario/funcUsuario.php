<?php
function getDB(){
  return json_decode(file_get_contents("../db/usuarios.json"), true);
}

function setDB($usuarios){
  file_put_contents("../db/usuarios.json", json_encode($usuarios));
}

function generarUsuario(){
  return [
    "Nombre" => $_POST["Nombre"],
    "Apellido" => $_POST["Apellido"],
    "Documento" => $_POST["Documento"],
    "Password" => $_POST["Password"],
    "Correo" => $_POST["Correo"]
  ];
}

function existeUsuario($nuevoUsuario, $usuarios){
  if(isset($usuarios)){
    foreach ($usuarios as $usuario) {
      if($usuario["Correo"] == $nuevoUsuario["Correo"]){
        return true;
      }
    }
  }
  return false;
}

function registrarUsuario($nuevoUsuario){
  $usuarios = getDB();
  if(existeUsuario($nuevoUsuario,$usuarios)){
    return false;
  }
  $usuarios[] = $nuevoUsuario;
    setDB($usuarios);
    file_put_contents("../db/usuarios.txt","\n".$nuevoUsuario["Correo"]);
  return true;
}

function switchModal(){
  if($nombre == "Usuario"){
    return $seleccion;
  }else{
    return $registros;
  }
}

function getUsuario($correo, $db){
  foreach ($db as $usuario) {
    if($usuario["Correo"] == $correo){
      return $usuario;
    }
  }
  return null;
}

?>
