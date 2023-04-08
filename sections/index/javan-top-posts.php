<?php $options = get_option( 'my_framework' ); ?>

<section>
    <article>
        <?php
            if ($options['top-on-off'] == 1){
                ?>
                <div class="post-box">
                    <div class="container">
                        <div class="row flex-item-start">
                            <div class="col-lg-6 col-md-12">
                                <div class="big-post-right">
                                    <?php
                                    if ($options['cat-select']){
                                        $query1 = new WP_Query( array(
                                            'posts_per_page' => 1,
                                            'post_type' => 'post',
                                            'cat'=>$options['cat-select'],
                                        ) );
                                    }else{
                                        $query1 = new WP_Query( array(
                                            'posts_per_page' => 1,
                                            'post_type' => 'post',
                                        ) );
                                    }

                                    ?>

                                    <?php if ( have_posts() ) : ?>
                                        <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
                                            <div class="big-post-right-post">
                                        <span class="daste">
                                            <?php the_category('','<li></li>') ?>
                                        </span>


                                                <div class="big-post-right-post-img">
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
                                                <div class="big-post-right-post-content">
                                                    <?php if(get_post_meta(get_the_ID(), 'top_title', true) != ""){echo '<span>'. get_post_meta(get_the_ID(), 'top_title', true).'</span>';}  ?>
                                                    <h2><a href="<?php the_permalink(); ?>" target="_blank"> <?php the_title() ?></a></h2>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="big-post-left">
                                    <div class="row">
                                        <?php if ($options['cat-select']){
                                            $query1 = new WP_Query( array(
                                                'posts_per_page' => 2,
                                                'post_type' => 'post',
                                                'offset' => 1,
                                                'cat'=> $options['cat-select'],
                                            ) );
                                        }else {
                                            $query1 = new WP_Query( array(
                                                'posts_per_page' => 2,
                                                'post_type' => 'post',
                                                'offset' => 1,
                                            ) );
                                        }

                                        ?>

                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
                                                <div class="big-post-left-post col-md-6 col-lg-12">
                                                    <div class="big-post-left-post-img">
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
                                                    <div class="big-post-left-post-content">
                                                        <?php if(get_post_meta(get_the_ID(), 'top_title', true) != ""){echo '<span>'. get_post_meta(get_the_ID(), 'top_title', true).'</span>';}  ?>
                                                        <h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a></h2>
                                                        <span class="the-excerpt"><?php the_excerpt()  ?></span>
                                                    </div>
                                                    <span class="daste">
                                            <?php the_category('','<li></li>') ?>
                                        </span>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

    </article>
</section>
