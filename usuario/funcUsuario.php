<?php
function getDB(){
  return json_decode(file_get_contents("./db/usuarios.json"),true);
}

function setDB($usuarios){
  file_put_contents("./db/usuarios.json", json_encode($usuarios));
}

function generarUsuario(){
  return [
    "Nombre" => $_POST["Nombre"],
    "Apellido" => $_POST["Apellido"],
    "Documento" => $_POST["Documento"],
    "Password" => passHash($_POST["Password"]),
    "Correo" => $_POST["Correo"]
  ];
}

function registrarUsuario(){
  $usuarios = getDB();
  $nuevoUsuario = generarUsuario();
  if(existeUsuario($nuevoUsuario,$usuarios)){
    return false;
  }
  $usuarios[] = $nuevoUsuario;
    setDB($usuarios);
    file_put_contents("./db/usuarios.txt",file_get_contents("./db/usuarios.txt")."\n".$nuevoUsuario["Correo"]);
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

/// FUNCIONES DE integrador DEL LADO SERVIDOR

function igualesPass($pass1,$pass2){
  if (strncmp($pass1,$pass2,15) != 0){
    return false;
  }else{
    return true;
  }
}

function minMax($min,$max,$valor){
 if (strlen(trim($valor)) >= $min && strlen(trim($valor)) <= $max){
   return true;
 }else{
   return false;
 }
}

function existeUsuario($nuevoUsuario, $dB){
    $usuarios = $dB;
    foreach ($usuarios as $usuario) {
      if($usuario["Correo"] == $nuevoUsuario["Correo"]){
        return true;
      }
  }
  return false;
}

function esMail($correo){
  if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
    return true;
  }else{
    return false;
  }
}

// FUNCION PASSWORD_HASH
function passHash($pass){
  $hash = PASSWORD_HASH($pass, PASSWORD_DEFAULT);
  return $hash;
}

/// FUNCION MOSTRAR ERRORES
function mostrarErrores($registro){
  if(isset($_SESSION["errores"][$registro]))
  {
    return $_SESSION["errores"][$registro];
  }
  return "";
}
?>
