<div class="index-post">
    <div class="index-post-img">
        <a href="<?php the_permalink(); ?>" target="_blank">


            <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }else{
                    ?>
                    <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
            <?php
                }
            ?>


        </a>
    </div>
    <div class="index-post-content">
        <?php
            if (get_post_type() == 'post') {
                if (get_post_meta(get_the_ID(), 'top_title', true) != "") {
                    echo '<span>' . get_post_meta(get_the_ID(), 'top_title', true) . '</span>';
                }

            }?>
        <h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a></h2>
        <span class="the-exp"> <?php

            the_excerpt()
            ?>
        </span>
    </div>
</div>
