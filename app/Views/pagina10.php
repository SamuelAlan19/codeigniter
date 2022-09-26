<?php helper('form')?> 
<?= form_open('public/main/submeter') ?>
<div>
    <input type="text" name="nome" value="<?= old('nome') ?>">
</div>
<div>
    <input type="text" name="apelido" value= "<?= old('apelido') ?>">
</div>
<div>
    <input type="submit" value="Guardar">
</div>
</form> 

<?php if(isset($erro)):?>
    <p><?= $erro->listErrors()?></p>
<?php endif; ?> 