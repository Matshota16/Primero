<div class="container">
    <div class="row">
        <div class="col">

    <form action="<?=base_url('usuario/index'); ?>" method="POST">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input name="marca" type="text" 
            class="form-control" id="marca"
            required
            placeholder="Marca" value="<?= set_value('marca') ?>" >
        </div>
        <input type="submit" class="btn btn-success" value="Agregar">
        </form>

    </div>
    </div>
</div>