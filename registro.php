<?php
  $campo = [
            ["tipo" =>     "text", "campo" =>     "Nombre"],
            ["tipo" =>     "text", "campo" =>   "Apellido"],
            ["tipo" =>     "text", "campo" =>  "Documento"],
            ["tipo" =>     "text", "campo" =>     "Correo"],
            ["tipo" => "password", "campo" => "Contraseña"],
            ["tipo" => "password", "campo" =>  "Confirmar"],
          ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registro</title>
  </head>
  <body>
    <div class="container bg-secondary col-6 my-5 border rounded">
      <h2 class = "text-center pt-5">Registrarse a S.M</h2>
      <form class="form-inline py-5">
        <div class="form-group col-12 text-center">
          <input type="text" class="form-control text-center col-6 mx-auto  mb-2" id="inlineFormInput" placeholder="Nombre">
        </div>
        <div class="form-group col-12 text-center">
          <input type="text" class="form-control text-center col-6 mx-auto  mb-2" id="inlineFormInput" placeholder="Apellido">
        </div>
        <div class="form-group col-12 text-center">
          <input type="text" class="form-control text-center col-6 mx-auto  mb-2" id="inlineFormInput" placeholder="Documento">
        </div>
        <div class="form-group col-12 text-center">
          <input type="text" class="form-control text-center col-6 mx-auto mb-2" id="correo" placeholder="Correo@Mail.com">
        </div>
        <div class="form-group col-12 text-center">
          <input type="password" class="form-control text-center col-6 mx-auto mb-2" id="contra" placeholder="Contraseña">
        </div>
        <div class="form-group col-12 text-center">
          <input type="password" class="form-control text-center col-6 mx-auto mb-2" id="contraR" placeholder="Repetir Contraseña">
        </div>
        <div class="form-group col-12 text-center justify-content-center">
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>
    </div>
    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
