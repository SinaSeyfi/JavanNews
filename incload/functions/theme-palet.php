<?php $options = get_option( 'my_framework' ); ?>
<style>
    .go-top,
    .big-post-right-post .big-post-right-post-content h2:before,
    .post-box .big-post-left .big-post-left-post .big-post-left-post-content h2:before,
    .nav-pills li:first-child .nav-link.active,
    .nav-pills li .nav-link.active,
    .daily-post .deily-post-list .bbttnn,
    .daily-post .deily-post-img .title:before,
    .daily-post .deily-post-head span:before,
    .video-post-big .video-post-big-content h3 a:before,
    .post-type-video .video-type .video-post .video-post-img .op,
    .daily-post .deily-post-list .bbttnn:hover,
    .sidebar-img .sidebar-img-title:before,
    .simple-sidebar .sidebar-title:before,
    .cat-title .name,
    .single .about-post .about-post-titr h3:before,
    .single .about-post .title span:before,
    .tooltiptext,
    .single .single-post .single-post-content .content .tag a:before,
    .single .single-post .single-post-img .daste ul li a:before,
    .daily-photo .daily-photo-post h3 :before,
    .daily-post .deily-post-list ul li:hover:before,
    .comment-list li .comment-body .reply a

    {
        background: <?php
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

    .main-menu ul li a:hover,
    .index-block-posts .index-post:hover .index-post-content h2 a,
    .daily-post .deily-post-list ul li a:hover,
    .daily-post .deily-post-img span  a:hover,
    .sidebar-right .list .tab-content .tab-pane ul li a:hover .icon-comment span,
    .sidebar-right .list .tab-content .tab-pane ul li a:hover,
    .daily-photo .daily-photo-title span a,
    .daily-photo .daily-photo-title span svg,
    .video-post-big .video-post-big-content h3 a:hover,
    .post-type-video .video-type .video-post .video-post-content h3 a:hover,
    .post-type-video .video-type .post-type-video-title span a:hover,
    .post-type-video .video-type .post-type-video-title span,
    .footer-top nav ul li a:hover,
    .footer-brand .footer-foot nav ul li a:hover svg,
    .footer-menu ul li a:hover,
    .single .single-post .single-post-img .daste ul li a:hover,
    .single .single-post .single-post-content .content .tag a:hover,
    .single .single-post .single-post-content .content nav span:hover,
    .simple-sidebar .sidebar-list span a:hover,
    .sidebar-img .item:hover .cont a,
    .single .single-post .single-post-content .content p a:hover,
    .single .single-post .single-post-content .content h1 a:hover,
    .single .single-post .single-post-content .content h2 a:hover,
    .post-box .big-post-left .big-post-left-post .big-post-left-post-content h2 a:hover
    {
        color: <?php
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
    .header-top .icon-and-time .time{
        border-top: 3px solid <?php
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
    .footer-top nav ul li a:hover,
    .single .single-post .single-post-content .content p a,
    .single .single-post .single-post-content .content h1 a,
    .single .single-post .single-post-content .content h2 a
    {
        border-bottom: 1px solid <?php
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

    .comment-respond form p.comment-form-comment textarea:focus,
    .woocommerce-Reviews .comment-form .comment-form-comment textarea:focus,
    .comment-form-author input[type=text]:focus,
    .comment-form-email input[type=text]:focus{
        outline: 2px solid <?php
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
    .comment-respond form p.form-submit input[type="submit"],
    .woocommerce-Reviews form p.form-submit input[type="submit"]{
        background: <?php
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
        color: #ffffff!important;
    }
<?php
    echo $options['opt-code-editor-1'];
    ?>

</style>




