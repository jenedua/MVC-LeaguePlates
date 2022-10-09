<?php $v->layout("_theme") ;?>

<div class="error">
<h2>ooooooops error <?= $error;?></h2>
</div>

<?=  $v->start("sidebar"); ?>
<a href="<?= url() ?>" title="Voltar ao inicio">Voltar</a>
<?= $v->end(); ?>