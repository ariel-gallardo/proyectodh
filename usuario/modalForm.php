<form id="Formulario" method = "POST" action = "usuario/registro.php">
    <div class="modal-body">
        <?php foreach ((isset($seleccion) ? $seleccion : $registros) as $registro): ?>
        <div class="md-form col-12 text-center align-items-center">
          <span><?= $registro["nombre"] ?></span>
          <input class="<?= $registro["bootstrap"] ?> form-control validate text-center justify-content-center col-6 mx-auto my-2" type="<?= $registro["tipo"]; ?>" name = "<?= $registro["nombre"] ?>" required >
        </div>
    <?php endforeach; ?>
    </div>
    <div class="modal-footer">
        <div class="md-form col-12 text-center">
            <button type="submit" class="Validar btn btn-primary"><?= $nombre ?></button>
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</form>
<?php
$errores = [];
echo mostrarErrores($errores); ?>
