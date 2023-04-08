<?php $options = get_option( 'my_framework' ); ?>
<section>
    <article>
        <?php
            if ($options['on-off-video'] == 1){
                ?>
                <div class="post-type-video">
                    <div class="container">
                        <div class="row video-type">
                            <div class="post-type-video-title">
                        <span>
                            <?php
                            echo $options['video-title']; // id of the field
                            ?>
                        </span>
                                <span><a href="<?php echo get_site_url() . '/video' ?>" target="_blank">مشاهده همه ویدیو ها</a></span>
                            </div>
                            <?php
                            if ($options['video'] == 'option-1'){
                                ?>
                                <div class="col-lg-6 col-md-12">

                                    <div class="video-post-big">
                                        <?php
                                        $query2 = new WP_Query( array(
                                            'post_type' => 'video',
                                            'posts_per_page' => 1,
                                        ) );
                                        ?>
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( $query2->have_posts() ) : $query2->the_post();
                                                ?>
                                                <div class="video-post-big-img">

                                                    <video width="100%" height="100%" controls poster="<?php echo get_the_post_thumbnail_url() ?>">
                                                        <source src="<?php echo get_post_meta(get_the_ID(), 'video_link' , true) ?>" type="video/mp4">
                                                    </video>
                                                </div>


                                                <div class="video-post-big-content">
                                                    <h3><a href="<?php the_permalink(); ?>" target="_blank">
                                                            <?php the_title() ?>
                                                        </a></h3>
                                                    <span><?php the_excerpt() ?></span>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <?php
                                    $query3 = new WP_Query( array(
                                        'post_type' => 'video',
                                        'posts_per_page' => 3,
                                        'offset' => 1,
                                    ) );
                                    ?>
                                    <?php if ( have_posts() ) :
                                        $i = 0;?>
                                        <?php while ( $query3->have_posts() ) : $query3->the_post();
                                        ?>
                                        <div class="video-post" >
                                            <div class="video-post-img">
                                                <a href="<?php the_permalink(); ?>" target="_blank"><?php echo get_the_post_thumbnail() ?></a>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span class="op">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C17.5915 3 22.2898 6.82432 23.6219 12C22.2898 17.1757 17.5915 21 12 21C6.40848 21 1.71018 17.1757 0.378052 12C1.71018 6.82432 6.40848 3 12 3ZM12 19C7.52443 19 3.73132 16.0581 2.45723 12C3.73132 7.94186 7.52443 5 12 5C16.4756 5 20.2687 7.94186 21.5428 12C20.2687 16.0581 16.4756 19 12 19Z" fill="currentColor" /></svg>

                                    </span></a>

                                                <div class="icon">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z" fill="currentColor" /><path d="M16 12L10 16.3301V7.66987L16 12Z" fill="currentColor" /></svg></span>

                                                </div>


                                            </div>
                                            <div class="video-post-content">
                                                <h3><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                                                <span><?php the_time('d F Y '); ?></span>
                                            </div>
                                        </div>



                                        <?php $i++;?>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="col-lg-6 col-md-12">

                                    <?php
                                    $query3 = new WP_Query( array(
                                        'post_type' => 'video',
                                        'posts_per_page' => 3,
                                        'offset' => 1,
                                    ) );
                                    ?>
                                    <?php if ( have_posts() ) :
                                        $i = 0;?>
                                        <?php while ( $query3->have_posts() ) : $query3->the_post();
                                        ?>
                                        <div class="video-post" >
                                            <div class="video-post-img">
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
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span class="op">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C17.5915 3 22.2898 6.82432 23.6219 12C22.2898 17.1757 17.5915 21 12 21C6.40848 21 1.71018 17.1757 0.378052 12C1.71018 6.82432 6.40848 3 12 3ZM12 19C7.52443 19 3.73132 16.0581 2.45723 12C3.73132 7.94186 7.52443 5 12 5C16.4756 5 20.2687 7.94186 21.5428 12C20.2687 16.0581 16.4756 19 12 19Z" fill="currentColor" /></svg>

                                    </span></a>

                                                <div class="icon">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z" fill="currentColor" /><path d="M16 12L10 16.3301V7.66987L16 12Z" fill="currentColor" /></svg></span>

                                                </div>
                                            </div>
                                            <div class="video-post-content">
                                                <h3><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                                                <span><?php the_time('d F Y '); ?></span>
                                            </div>
                                        </div>



                                        <?php $i++;?>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <div class="video-post-big">
                                        <?php
                                        $query2 = new WP_Query( array(
                                            'post_type' => 'video',
                                            'posts_per_page' => 1,
                                        ) );
                                        ?>
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( $query2->have_posts() ) : $query2->the_post();
                                                ?>
                                                <div class="video-post-big-img">

                                                    <video width="100%" height="100%" controls poster="<?php echo get_the_post_thumbnail_url() ?>">
                                                        <source src="<?php echo get_post_meta(get_the_ID(), 'video_link' , true) ?>" type="video/mp4">
                                                    </video>
                                                </div>


                                                <div class="video-post-big-content">
                                                    <h3><a href="<?php the_permalink(); ?>" target="_blank">
                                                            <?php the_title() ?>
                                                        </a></h3>
                                                    <span><?php the_excerpt() ?></span>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

    </article>
</section>
