<?php /* Template Name: چاپ */ ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="<?php uri('bootstrap/css/bootstrap.rtl.min.css') ?>" rel="stylesheet">
    <link href="<?php uri('style.css'); ?>" rel="stylesheet">
    <title><?php bloginfo('name'); echo "|"; wp_title(); ?></title>

</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="logo-header border-bottom-top justify-content-md-center">
                    <div class="logo-img">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php $options = get_option( 'my_framework' ); echo $options['logo']; ?>" alt="<?php bloginfo('name') ?>">
                        </a>
                    </div>
                    <div class="site-title">
                        <?php if (is_single()){
                            ?>
                            <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
                            <?php
                        }else{
                            ?>
                            <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                            <?php
                        } ?>

                        <span><?php bloginfo('description') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
$query = new WP_Query(array('p'=>$_GET['id']));
while ($query->have_posts()):$query->the_post();
?>
<section>
    <article>
        <div class="container">
            <div class="row">
                <div class="top row-align-item-center">
                    <span >
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 18H17V16H7V18Z" fill="currentColor" /><path d="M17 14H7V12H17V14Z" fill="currentColor" /><path d="M7 10H11V8H7V10Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor" /></svg>
                        کد خبر : <?php echo get_the_ID() ?>
                    </span>

                    <span class="left">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H11V12H16V14H9V7Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor" /></svg>
                        <?php echo wp_date(' d F Y ') ?>
                    </span>
                </div>
                <div class="single-post-content">
                    <div class="title">
                        <?php if(get_post_meta(get_the_ID(), 'top_title', true) != ""){echo '<span>'. get_post_meta(get_the_ID(), 'top_title', true).'</span>';}  ?>
                        <h1><?php the_title(); ?></h1>
                        <h2><strong>
                                <?php the_excerpt()  ?>
                            </strong></h2>
                    </div>
                    <div class="content">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail();
                        }else {
                            ?>
                            <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                            <?php
                        }
                        ?>
                        <p>
                            <?php the_content(); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<?php
endwhile;
?>
<style>
    .top{
        padding: 5px;
        color: #fff;
        background: #646464;
        margin: 10px 0;
        border-radius: 6px;
        font-size: 13px;
    }
    .left{
        float: left;
    }
    .single-post-content{
        margin: 30px 0;
    }
    .single-post-content .title span{
        font-size: 14px;
    }
    .single-post-content .title h1{
        font-size: 20px;
        margin: 17px 0;
        font-weight: 700;
    }
    .single-post-content .title h2{
        font-size: 17px;
        font-weight: 300;
        border: 1px solid #b1b1b1;
        padding: 20px 15px;
        border-radius: 6px;
        margin-bottom: 25px;
    }
    .single-post-content .content img{
        width: 450px;
        height: 300px;
        float: left;
    }
    .single-post-content .content p{
        font-size: 13px;
        line-height: 50px;
    }
    blockquote {
        border-right: 15px solid <?php
                            if ($options['color-seg'] == 'option-1') {
                                echo '#de0400';
                            }elseif ($options['color-seg'] == 'option-2'){
                                echo '#3fc899';
                            }elseif ($options['color-seg'] == 'option-3'){
                                echo '#0a53be';
                            }else{
                                echo $options['opt-color-1'];
                            }
        ?>!important;
    }
    .single-post-content .content ol li{
        list-style: auto;
    }
    .single-post-content .content ul li{
        list-style: disc;
    }
    .single-post-content .content h1,
    .single-post-content .content h2
    {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .single-post-content .content h3,
    .single-post-content .content h4,
    .single-post-content .content h5,
    .single-post-content .content h6
    {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 15px;
    }

</style>
<script src="<?php uri('assets/js/jquery.min.js') ?>" defer></script>
<script src="<?php uri('bootstrap/js/bootstrap.min.js') ?>" defer></script>
<!--    <script src="assets/js/slick.min.js"></script>-->
<script src="assets/js/index.js" defer></script>
<?php wp_footer() ?>
</body>
</html>