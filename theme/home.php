<?php $v->layout("_theme") ;?>
<div class = "users">
<?php  if($users):
    foreach($users as $user):
        ?>
            <article class= users_user>
                <h3><?= $user->first_name, " ", $user->last_name;?> </h3>
    </article>
        <?php
    endforeach;
    
else:
    
    ?>
    <h4>Não existe usuarios cadastrado!</h4>
    <p>teste</p>
    <?php

endif; ?>

</div>