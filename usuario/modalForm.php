<form id="Formulario" method = "POST" action = "<?php echo "../usuario/".$nombre.".php" ?>">
    <div class="modal-body">
        <?php foreach ($registros as $registro): ?>
        <div class="md-form col-12 text-center">
          <input class="<?= $registro["nombre"] ?> form-control validate text-center col-6 mx-auto my-2" type="<?= $registro["tipo"]; ?>" placeholder="<?= $registro["mensaje"]; ?>" name = "<?= $registro["nombre"] ?>" required>
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
