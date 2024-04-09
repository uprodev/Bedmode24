<?php

$pus = get_field('product_usps', 'options');

if($pus):?>

    <ul class="check-list d-flex flex-wrap ">

        <?php foreach($pus as $pu):?>

            <li><i class="far fa-check"></i> <?= $pu['text'];?></li>

        <?php endforeach;?>

    </ul>

<?php endif;
