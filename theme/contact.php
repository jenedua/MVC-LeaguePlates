<?php $v->layout("_theme"); ?>

<div class="contact">
    <h2>Fale conosco !!</h2>

    <form action="<?= url("contact"); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu nome:">
        <input type="email" name="name" placeholder="Seu E-mail:">
        <textarea name="message" placeholder="mensagem" rows="3"></textarea>
        <button>Enviar Mesagem</button>
    </form>

</div>
<?=  $v->start("scripts")?>
<script>
    $("button").after('<button type="reset">Limpar!</button>')
</script>

<?= $v->end()?>