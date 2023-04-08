<?php $options = get_option( 'my_framework' );
?>
<section>
    <article>
        <?php
            if ($options['on-off-images'] == 1){
                ?>
                <div class="daily-photo">
                    <div class="container">
                        <div class="row">
                            <div class="daily-photo-title">
                            <span>
                                <?php
                                echo $options['image-title'];
                                ?>
                            </span>
                                <span>
                                    <?php
                                    if($options['cat-select-image'] && sizeof($options['cat-select-image'])==1){
                                            ?>
                                            <a target="_blank" href="<?php echo get_category_link( $options['cat-select-image'][0] ) ?>">مشاهده بیشتر</a>
                                            <?php
                                    }
                                    ?>
                            </span>
                            </div>
                            <?php
                            $query4 = new WP_Query( array(
                                'posts_per_page' => 4,
                                'post_type' => 'post',
                                'cat'=>$options['cat-select-image'],
                            ) );
                            ?>
                            <?php if ( have_posts() ) : ?>
                                <?php while ( $query4->have_posts() ) : $query4->the_post(); ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="daily-photo-post">
                                            <a href="<?php the_permalink(); ?>" target="_blank"><?php echo get_the_post_thumbnail() ?></a>
                                            <h3><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

    </article>
</section>
