<form method = "POST" action = "<?php echo "usuario/".$nombre.".php" ?>">
    <div class="modal-body">
        <?php foreach ($registros as $registro): ?>
            <div class="md-form col-12 text-center">
            <input class="form-control validate text-center col-6 mx-auto my-2" type="<?= $registro["tipo"]; ?>" placeholder="<?= $registro["mensaje"]; ?>" name = "<?= $registro["nombre"] ?>">
        </div>
    <?php endforeach; ?>
    </div>
    <div class="modal-footer">
        <div class="md-form col-12 text-center">
            <button type="submit" class="btn btn-primary"><?= $nombre ?></button>
            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</form>
