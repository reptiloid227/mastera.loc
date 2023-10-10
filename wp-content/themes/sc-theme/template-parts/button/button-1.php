<?php
    /** @var array $args */
    global $CoreTheme;
?>
<section class="buttonSection">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?=$args['link']['url']?>" target="<?=$args['link']['target']?>" class="button" style="background-color: <?=$CoreTheme->returnColor($args['color_list'])?>;"><?=$args['link']['title']?></a>
            </div>
        </div>
    </div>
</section>