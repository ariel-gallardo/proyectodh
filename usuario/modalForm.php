<?php session_start(); ?>
<form id="Formulario" method = "POST" action = "./integrador/">
    <div class="modal-body">
        <?php foreach ((isset($seleccion) ? $seleccion : $registros) as $registro): ?>
        <div class="md-form row text-left">
          <span class = "col-4 col-md-3 text-right pt-3"><?= $registro["nombre"] ?></span>
          <span class="row col-8 col-md-9 pl-0">
            <input class="form-control validate text-center justify-content-center col-10 col-md-6 ml-1 my-2 <?= $registro["bootstrap"] ?>" type="<?= $registro["tipo"]; ?>" name = "<?= $registro["nombre"] ?>" required >
            <small class="text-danger col-md-5 pt-3"> <?= mostrarErrores($registro["nombre"]); ?></small>
          </span>
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
