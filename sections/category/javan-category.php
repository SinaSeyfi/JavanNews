<?php $options = get_option( 'my_framework' ); ?>
<section>
    <article style="background: #f8f8f8;     padding-bottom: 30px;">
        <div class="container">
            <div class="row row-padding <?php if($options['pages']== 'option-3'){ echo 'justify-content-md-center';} ?>">
                <?php
                if ($options['pages'] == 'option-1'){
                    ?>
                    <div class="col-md-3">

                        <?php dynamic_sidebar('home_sidebar_3'); ?>

                    </div>
                    <div class="col-md-9">
                        <div class="cat-title">
                            <div class="name">
                                <span>
                                    دسته بندی
                                </span>
                            </div>
                            <div class="tags">
                            <span>
                                <?php
                                single_cat_title();
                                ?>

                            </span>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            if ($options['pages-p'] == 'option-1'){
                                ?>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <?php
                            }elseif($options['pages-p'] == 'option-2'){
                                ?>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();
                                        ?>


                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <?php
                }elseif($options['pages'] == 'option-2'){
                    ?>
                    <div class="col-md-9">
                        <div class="cat-title">
                            <div class="name">
                                <span>
                                    دسته بندی
                                </span>
                            </div>
                            <div class="tags">
                            <span>
                                <?php
                                single_cat_title();
                                ?>

                            </span>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            if ($options['pages-p'] == 'option-1'){
                                ?>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <?php
                            }elseif($options['pages-p'] == 'option-2'){
                                ?>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col-md-3">

                        <?php dynamic_sidebar('home_sidebar_3'); ?>

                    </div>
                    <?php
                }else{
                    ?>

                    <div class="col-md-12">
                        <div class="cat-title">
                            <div class="name">
                                <span>
                                    دسته بندی
                                </span>
                            </div>
                            <div class="tags">
                            <span>
                                <?php
                                single_cat_title();
                                ?>

                            </span>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            if ($options['pages-p'] == 'option-1'){
                                ?>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <?php
                            }elseif($options['pages-p'] == 'option-2'){
                                ?>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <?php dynamic_sidebar('category_sidebar_1'); ?>


                                </div>
                                <?php
                            }else{
                                ?>
                                <style>
                                    .index-block-posts .index-post .index-post-img {
                                        width: 25%;
                                        height: 115px;
                                    }
                                </style>
                                <div class="col-md-8">
                                    <div class="index-block-posts">
                                        <?php
                                        while (have_posts()):the_post();
                                            get_template_part('sections/loop/loop' , 'news');
                                        endwhile;
                                        navigation();

                                        ?>


                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>

                <?php
                }
                ?>

            </div>
        </div>
    </article>
</section>