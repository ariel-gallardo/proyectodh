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
    "Password" => $_POST["Password"],
    "Correo" => $_POST["Correo"]
  ];
}
function registrarUsuario($nuevoUsuario){
  $usuarios = getDB();
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

/// FUNCIONES DE VALIDACION DEL LADO SERVIDOR

function igualesPass($pass1,$pass2){
  if (strncmp($pass1,$pass2,15) !== 0){
    return false;
  }else {
    return true;
  }
}
function minMax($min,$max,$valor){
 if (strlen(trim($valor) >= $min) && strlen(trim($valor) <= $max) ){
   return true;
 }else{
   return false;
 }

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
function esMail($correo){
  if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
    return true;
  }else{
    return false;
  }
}
function esNulo($Nombre,$Apellido,$Documento,$Correo,$Password){
  if(strlen(trim($Nombre)) < 1 || strlen(trim($Apellido)) <1 ||
  strlen(trim($Documento)) < 1 || strlen(trim($Correo)) < 1 ||
  strlen(trim($Password)) < 1 ) {
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
function mostrarErrores($errores){
  if(count($errores) > 0 ) {
    echo "<div> <ul> ";
    foreach ($errores as $error) {
      echo "<li>".$error."</li>";
  }
  echo "</ul>";
  echo "</div>";
}
}
?>
