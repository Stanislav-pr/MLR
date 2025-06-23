<?php

$default = get_sub_field('default');

if ($default){
    $title_farewell = get_field('title_farewell', 'options');
    $text_farewell = get_field('text_farewell', 'options');
}else{
    $title_farewell = get_sub_field('title');
    $text_farewell = get_sub_field('text');
}

?>

<section class="farewell-section">
    <div class="container">
        <?php if($title_farewell): ?>
            <h2 class="title-section one-line"><span class="line-text"><?= $title_farewell;?></span><span class="line line-2"></span></h2>
        <?php endif; ?>
        <?php if($text_farewell): ?>
            <div class="farewell-content">
                <?= $text_farewell;?>
            </div>
        <?php endif; ?>
    </div>
</section>
