<?php $options = get_option( 'my_framework' );

    ?>
    <section>
        <article>
            <div class="index-block">
                <div class="container">
                    <div class="row <?php if($options['index']== 'option-3'){ echo 'justify-content-md-center';} ?>">
                        <?php
                        if($options['index'] == 'option-1'){
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php dynamic_sidebar('home_sidebar_1'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php dynamic_sidebar('home_sidebar_2'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="index-block-posts">

                                    <?php if ( have_posts() ) : ?>
                                        <?php while ( have_posts() ) : the_post(); ?>
                                            <?php get_template_part('sections/loop/loop' , 'news') ?>
                                        <?php endwhile;
                                        navigation();
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }elseif ($options['index'] == 'option-2'){
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="index-block-posts">
                                    <?php if ( have_posts() ) : ?>
                                        <?php while ( have_posts() ) : the_post(); ?>
                                            <?php get_template_part('sections/loop/loop' , 'news') ?>
                                        <?php endwhile;
                                        navigation();
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php dynamic_sidebar('home_sidebar_1'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php dynamic_sidebar('home_sidebar_2'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }else{
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="index-block-posts">
                                    <?php if ( have_posts() ) : ?>
                                        <?php while ( have_posts() ) : the_post(); ?>
                                            <?php get_template_part('sections/loop/loop' , 'news') ?>
                                        <?php endwhile;
                                        navigation();
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
        </article>
    </section>





