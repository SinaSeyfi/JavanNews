<?php $options = get_option( 'my_framework' );
      if ($options['on-off-single-video'] == 1){
          ?>
          <style>
              body,
              .single,
              .header-top,
              .main-menu ul li ul,
              .daily-post .deily-post-img .icon,
              .simple-sidebar .sidebar-title
              {
                  background: #202023;
              }
              .header-botoom,
              .sidebar-img .sidebar-img-title,
              .single .single-post .single-post-content .title h2 strong,
              .daily-post .deily-post-head,
              .daily-post .deily-post-img,
              .daily-post .deily-post-list,
              .single .single-post .single-post-content .content nav,
              .simple-sidebar,
              .sidebar-right,
              .footer-top,
              .javan-comments
              {
                  background: #424258;
              }
              .sidebar-img .sidebar-img-title ,
              .single .single-post .single-post-content .title h2 strong,
              .simple-sidebar,
              .sidebar-right,
              .javan-comments
              {
                  border: 1px solid #424258!important;
              }
              .header-top .icon-and-time .icon a svg,
              .footer-brand .footer-foot nav ul li a svg,

              {
                  fill: #eeeeee;
              }
              .header-top .icon-and-time .icon a svg,
              .nav-icon svg{
                  fill: #eeeeee;
              }
              .header-top .logo-header .site-title h1 a,
              .header-top .logo-header .site-title h2 a,
              .header-top .logo-header .site-title span,
              .main-menu ul li a,
              .header-top .icon-and-time .time,
              .header-botoom, .sidebar-img .sidebar-img-title,
              .sidebar-img .item .cont a,
              .single .single-post .single-post-content .title h1,
              .single .single-post .single-post-content .title h2 strong,
              .single .single-post .single-post-content .content p,
              .single .single-post .single-post-img .time,
              .daily-post .deily-post-head span,
              .daily-post .deily-post-img span a,
              .daily-post .deily-post-img .icon,
              .daily-post .deily-post-list ul li a,
              .single .single-post .single-post-content .content .tag a,
              .single .single-post .single-post-content .content nav .mooooooo,
              .simple-sidebar .sidebar-title,
              .simple-sidebar .sidebar-list span a,
              .sidebar-right .list .tab-content .tab-pane ul li a,
              .nav-pills li button,
              .sidebar-right .list .tab-content .tab-pane ul li .icon-comment svg,
              .sidebar-right .list .tab-content .tab-pane ul li .icon-comment span,
              .footer-top nav ul li a,
              .footer-menu span,
              .footer-menu ul li a,
              .footer-menu p,
              .footer-brand .footer-foot .brand span,
              .footer-brand .footer-foot .brand-name span,
              .single .single-post .single-post-content .content ul li,
              .single .single-post .single-post-content .content ol li,
              .single .single-post .single-post-content .content h1,
              .single .single-post .single-post-content .content h2,
              .single .single-post .single-post-content .content h3,
              .single .single-post .single-post-content .content h4,
              .single .single-post .single-post-content .content h5,
              .single .single-post .single-post-content .content h6,
              .comment-respond h3, .woocommerce-Reviews .comment-form-comment label,
              .comment-notes,
              .comment-form
              {
                  color: #eeeeee;
              }
              .daily-post .deily-post-list li:before,
              .sidebar-right .list .tab-content .tab-pane ul li:before
              {
                  background: #eeeeee;
              }
              .main-menu ul li a:not(:only-child)::after {
                  background-image: url(<?php uri('assets/img/dwn3.png') ?>) ;
              }
              .footer-top,
              .header-botoom
              {
                  border-top: 1px solid #424258;
              }
              .header-botoom{
                  border-bottom: 1px solid #424258;
              }
              blockquote {
                  background: #424258;
              }
          </style>
<?php
      }
?>
<section>
    <article>
        <div class="single">
            <div class="container">

                    <div class="row <?php if($options['single-video']== 'option-3'){ echo 'justify-content-md-center';} ?>">
                        <?php
                        if($options['single-video'] == 'option-1'){
                            ?>
                            <div class="col-md-3 order-md-1">
                                <?php dynamic_sidebar('home_sidebar_12'); ?>

                            </div>
                            <div class="col-md-9 order-md-0">
                                <div class="single-post">
                                    <div class="single-post-img">
                                        <div class="time">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H11V12H16V14H9V7Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor" /></svg>
                                            <?php echo wp_date(' d F Y ') ?>
                                        </span>
                                            -
                                            <span><?php echo wp_date("H:i");  ?></span>
                                            <span class="left">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 18H17V16H7V18Z" fill="currentColor" /><path d="M17 14H7V12H17V14Z" fill="currentColor" /><path d="M7 10H11V8H7V10Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor" /></svg>
                                            <?php echo get_the_ID() ?>
                                        </span>
                                        </div>
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail();
                                        }else {
                                            ?>
                                            <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                                            <?php
                                        }
                                        ?>

                                        <div class="daste">
                                            <ul>
                                                <?php

                                                $category = get_the_terms( get_the_ID(), 'video_category' );
                                                if($category){
                                                    foreach ( $category as $cat){
                                                        echo '<li><a href=" ' . get_term_link($cat->slug, 'video_category') . ' ">' . $cat->name . '</a></li>';
                                                    }
                                                }

                                                ?>
                                            </ul>

                                        </div>

                                        <div class="more">
                                            <a href="#javan-comments">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9H7V7H17V9Z" fill="currentColor" /><path d="M7 13H17V11H7V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z" fill="currentColor" /></svg>
                                                نظر</a>
                                            <a href="#sharee">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 6.12549 15.0077 6.24919 15.0227 6.37063L8.08261 9.84066C7.54305 9.32015 6.80891 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15C6.80891 15 7.54305 14.6798 8.08261 14.1593L15.0227 17.6294C15.0077 17.7508 15 17.8745 15 18C15 19.6569 16.3431 21 18 21C19.6569 21 21 19.6569 21 18C21 16.3431 19.6569 15 18 15C17.1911 15 16.457 15.3202 15.9174 15.8407L8.97733 12.3706C8.99229 12.2492 9 12.1255 9 12C9 11.8745 8.99229 11.7508 8.97733 11.6294L15.9174 8.15934C16.457 8.67985 17.1911 9 18 9Z" fill="currentColor" /></svg>
                                                اشتراک گداری
                                            </a>
                                        </div>

                                    </div>
                                    <div class="single-post-content">
                                        <div class="title">
                                            <h1><?php the_title(); ?></h1>
                                            <h2><strong>
                                                    <?php the_excerpt()  ?>
                                                </strong></h2>
                                        </div>
                                        <div class="content">

                                            <?php the_content(); ?>




                                            <?php
                                            if(get_post_meta(get_the_ID(), 'video_link' , true)){
                                                ?>

                                                <div class="video-post-big-img">

                                                    <video width="70%" height="100%" controls poster="<?php echo get_the_post_thumbnail_url() ?>">
                                                        <source src="<?php echo get_post_meta(get_the_ID(), 'video_link' , true) ?>" type="video/mp4">
                                                    </video>
                                                </div>

                                                <?php
                                            }
                                            ?>



                                            <nav class="sharee col_12" id="sharee">
                                                <div class="mooooooo">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8284 12L16.2426 13.4142L19.071 10.5858C20.6331 9.02365 20.6331 6.49099 19.071 4.9289C17.509 3.3668 14.9763 3.3668 13.4142 4.9289L10.5858 7.75732L12 9.17154L14.8284 6.34311C15.6095 5.56206 16.8758 5.56206 17.6568 6.34311C18.4379 7.12416 18.4379 8.39049 17.6568 9.17154L14.8284 12Z" fill="currentColor" /><path d="M12 14.8285L13.4142 16.2427L10.5858 19.0711C9.02372 20.6332 6.49106 20.6332 4.92896 19.0711C3.36686 17.509 3.36686 14.9764 4.92896 13.4143L7.75739 10.5858L9.1716 12L6.34317 14.8285C5.56212 15.6095 5.56212 16.8758 6.34317 17.6569C7.12422 18.4379 8.39055 18.4379 9.1716 17.6569L12 14.8285Z" fill="currentColor" /><path d="M14.8285 10.5857C15.219 10.1952 15.219 9.56199 14.8285 9.17147C14.4379 8.78094 13.8048 8.78094 13.4142 9.17147L9.1716 13.4141C8.78107 13.8046 8.78107 14.4378 9.1716 14.8283C9.56212 15.2188 10.1953 15.2188 10.5858 14.8283L14.8285 10.5857Z" fill="currentColor" /></svg>
                                                    <div class="link">
                                                        <?php $sh_link = wp_get_shortlink();
                                                        ?>
                                                        <span class="hox"  onclick="copyToClipboard('#link-sh')" id="link-sh"><?php echo $sh_link; ?></span>
                                                    </div>
                                                    <span class="tooltiptext" id="chmtn-1">کپی</span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php <?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://telegram.me/share/url?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank" >
                                                            <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                                                    .st0{fill:url(#SVGID_1_);}
                                                                    .st1{fill:#FFFFFF;}
                                                                    .st2{fill:#D2E4F0;}
                                                                    .st3{fill:#B5CFE4;}
                                                                </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="256" x2="256" y1="0" y2="510.1322"><stop offset="0" style="stop-color:#41BCE7"/><stop offset="1" style="stop-color:#22A6DC"/></linearGradient><circle class="st0" cx="256" cy="256" r="256"/><g><path class="st1" d="M380.6,147.3l-45.7,230.5c0,0-6.4,16-24,8.3l-105.5-80.9L167,286.7l-64.6-21.7c0,0-9.9-3.5-10.9-11.2    c-1-7.7,11.2-11.8,11.2-11.8l256.8-100.7C359.5,141.2,380.6,131.9,380.6,147.3z"/><path class="st2" d="M197.2,375.2c0,0-3.1-0.3-6.9-12.4c-3.8-12.1-23.3-76.1-23.3-76.1l155.1-98.5c0,0,9-5.4,8.6,0    c0,0,1.6,1-3.2,5.4c-4.8,4.5-121.8,109.7-121.8,109.7"/><path class="st3" d="M245.8,336.2l-41.7,38.1c0,0-3.3,2.5-6.8,0.9l8-70.7"/></g></g></svg>                                                </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M448,512l-384,0c-35.328,0 -64,-28.672 -64,-64l0,-384c0,-35.328 28.672,-64 64,-64l384,0c35.328,0 64,28.672 64,64l0,384c0,35.328 -28.672,64 -64,64Z" id="Dark_Blue" style="fill:#1da1f2;fill-rule:nonzero;"/><path d="M196.608,386.048c120.704,0 186.752,-100.096 186.752,-186.752c0,-2.816 0,-5.632 -0.128,-8.448c12.8,-9.216 23.936,-20.864 32.768,-34.048c-11.776,5.248 -24.448,8.704 -37.76,10.368c13.568,-8.064 23.936,-20.992 28.928,-36.352c-12.672,7.552 -26.752,12.928 -41.728,15.872c-12.032,-12.8 -29.056,-20.736 -47.872,-20.736c-36.224,0 -65.664,29.44 -65.664,65.664c0,5.12 0.64,10.112 1.664,14.976c-54.528,-2.688 -102.912,-28.928 -135.296,-68.608c-5.632,9.728 -8.832,20.992 -8.832,33.024c0,22.784 11.648,42.88 29.184,54.656c-10.752,-0.384 -20.864,-3.328 -29.696,-8.192l0,0.896c0,31.744 22.656,58.368 52.608,64.384c-5.504,1.536 -11.264,2.304 -17.28,2.304c-4.224,0 -8.32,-0.384 -12.288,-1.152c8.32,26.112 32.64,45.056 61.312,45.568c-22.528,17.664 -50.816,28.16 -81.536,28.16c-5.248,0 -10.496,-0.256 -15.616,-0.896c28.928,18.432 63.488,29.312 100.48,29.312" id="Logo__x2014__FIXED" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g id="WhatsApp-Logo-Icon"><path d="M116.225,-0.001c-11.264,0.512 -26.112,1.536 -32.768,3.072c-10.24,2.048 -19.968,5.12 -27.648,9.216c-9.728,4.608 -17.92,10.752 -25.088,17.92c-7.68,7.68 -13.824,15.872 -18.432,25.6c-4.096,7.68 -7.168,17.408 -9.216,27.648c-1.536,6.656 -2.56,21.504 -2.56,32.768c-0.512,4.608 -0.512,10.752 -0.512,13.824l0,251.905l0,13.824c0.512,11.264 1.536,26.112 3.072,32.768c2.048,10.24 5.12,19.968 9.216,27.648c4.608,9.728 10.752,17.92 17.92,25.088c7.68,7.68 15.872,13.824 25.6,18.432c7.68,4.096 17.408,7.168 27.648,9.216c6.656,1.536 21.504,2.56 32.768,2.56c4.608,0.512 10.752,0.512 13.824,0.512l251.904,0l13.824,0c11.264,-0.512 26.112,-1.536 32.768,-3.072c10.24,-2.048 19.968,-5.12 27.648,-9.216c9.728,-4.608 17.92,-10.752 25.088,-17.92c7.68,-7.68 13.824,-15.872 18.432,-25.6c4.096,-7.68 7.168,-17.408 9.216,-27.648c1.536,-6.656 2.56,-21.504 2.56,-32.768c0.512,-4.608 0.512,-10.752 0.512,-13.824l0,-265.729c-0.512,-11.264 -1.536,-26.112 -3.072,-32.768c-2.048,-10.24 -5.12,-19.968 -9.216,-27.648c-4.608,-9.728 -10.752,-17.92 -17.92,-25.088c-7.68,-7.68 -15.872,-13.824 -25.6,-18.432c-7.68,-4.096 -17.408,-7.168 -27.648,-9.216c-6.656,-1.536 -21.504,-2.56 -32.768,-2.56c-4.608,-0.512 -10.752,-0.512 -13.824,-0.512l-265.728,0Z" style="fill:url(#_Linear1);fill-rule:nonzero;"/><path d="M344.754,289.698c-4.56,-2.282 -26.98,-13.311 -31.161,-14.832c-4.18,-1.521 -7.219,-2.282 -10.259,2.282c-3.041,4.564 -11.78,14.832 -14.44,17.875c-2.66,3.042 -5.32,3.423 -9.88,1.14c-4.561,-2.281 -19.254,-7.095 -36.672,-22.627c-13.556,-12.087 -22.709,-27.017 -25.369,-31.581c-2.66,-4.564 -0.283,-7.031 2,-9.304c2.051,-2.041 4.56,-5.324 6.84,-7.986c2.28,-2.662 3.04,-4.564 4.56,-7.606c1.52,-3.042 0.76,-5.705 -0.38,-7.987c-1.14,-2.282 -10.26,-24.72 -14.06,-33.848c-3.701,-8.889 -7.461,-7.686 -10.26,-7.826c-2.657,-0.132 -5.7,-0.16 -8.74,-0.16c-3.041,0 -7.98,1.141 -12.161,5.704c-4.18,4.564 -15.96,15.594 -15.96,38.032c0,22.438 16.34,44.116 18.62,47.159c2.281,3.043 32.157,49.089 77.902,68.836c10.88,4.697 19.374,7.501 25.997,9.603c10.924,3.469 20.866,2.98 28.723,1.806c8.761,-1.309 26.98,-11.029 30.781,-21.677c3.799,-10.649 3.799,-19.777 2.659,-21.678c-1.139,-1.902 -4.179,-3.043 -8.74,-5.325m-83.207,113.573l-0.061,0c-27.22,-0.011 -53.917,-7.32 -77.207,-21.137l-5.539,-3.287l-57.413,15.056l15.325,-55.959l-3.608,-5.736c-15.184,-24.145 -23.203,-52.051 -23.192,-80.704c0.033,-83.611 68.083,-151.635 151.756,-151.635c40.517,0.016 78.603,15.811 107.243,44.474c28.64,28.663 44.404,66.764 44.389,107.283c-0.035,83.617 -68.083,151.645 -151.693,151.645m129.102,-280.709c-34.457,-34.486 -80.281,-53.487 -129.103,-53.507c-100.595,0 -182.468,81.841 -182.508,182.437c-0.013,32.156 8.39,63.546 24.361,91.212l-25.892,94.545l96.75,-25.37c26.657,14.535 56.67,22.194 87.216,22.207l0.075,0c100.586,0 182.465,-81.852 182.506,-182.448c0.019,-48.751 -18.946,-94.59 -53.405,-129.076" style="fill:#fff;"/></g><defs><linearGradient gradientTransform="matrix(0,-512,-512,0,256.001,512)" gradientUnits="userSpaceOnUse" id="_Linear1" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#25cf43;stop-opacity:1"/><stop offset="1" style="stop-color:#61fd7d;stop-opacity:1"/></linearGradient></defs></svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="javan-comments" id="javan-comments">
                                    <?php
                                    while (have_posts()){
                                        the_post();
                                        comments_template('', true);
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }elseif ($options['single-video'] == 'option-2'){
                            ?>
                            <div class="col-md-9">
                                <div class="single-post">
                                    <div class="single-post-img">
                                        <div class="time">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H11V12H16V14H9V7Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor" /></svg>
                                            <?php echo wp_date(' d F Y ') ?>
                                        </span>
                                            -
                                            <span><?php echo WP_date("H:i");  ?></span>
                                            <span class="left">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 18H17V16H7V18Z" fill="currentColor" /><path d="M17 14H7V12H17V14Z" fill="currentColor" /><path d="M7 10H11V8H7V10Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor" /></svg>
                                            <?php echo get_the_ID() ?>
                                        </span>
                                        </div>
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail();
                                        }else {
                                            ?>
                                            <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                                            <?php
                                        }
                                        ?>

                                        <div class="daste">
                                            <ul>
                                                <?php

                                                $category = get_the_terms( get_the_ID(), 'video_category' );
                                                if($category){
                                                    foreach ( $category as $cat){
                                                        echo '<li><a href=" ' . get_term_link($cat->slug, 'video_category') . ' ">' . $cat->name . '</a></li>';
                                                    }
                                                }

                                                ?>
                                            </ul>

                                        </div>

                                        <div class="more">
                                            <a href="#javan-comments">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9H7V7H17V9Z" fill="currentColor" /><path d="M7 13H17V11H7V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z" fill="currentColor" /></svg>
                                                نظر</a>
                                            <a href="#sharee">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 6.12549 15.0077 6.24919 15.0227 6.37063L8.08261 9.84066C7.54305 9.32015 6.80891 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15C6.80891 15 7.54305 14.6798 8.08261 14.1593L15.0227 17.6294C15.0077 17.7508 15 17.8745 15 18C15 19.6569 16.3431 21 18 21C19.6569 21 21 19.6569 21 18C21 16.3431 19.6569 15 18 15C17.1911 15 16.457 15.3202 15.9174 15.8407L8.97733 12.3706C8.99229 12.2492 9 12.1255 9 12C9 11.8745 8.99229 11.7508 8.97733 11.6294L15.9174 8.15934C16.457 8.67985 17.1911 9 18 9Z" fill="currentColor" /></svg>
                                                اشتراک گداری
                                            </a>
                                        </div>

                                    </div>
                                    <div class="single-post-content">
                                        <div class="title">
                                            <h1><?php the_title(); ?></h1>
                                            <h2><strong>
                                                    <?php the_excerpt()  ?>
                                                </strong></h2>
                                        </div>
                                        <div class="content">

                                            <?php the_content(); ?>


                                            <?php
                                            if(get_post_meta(get_the_ID(), 'video_link' , true)){
                                                ?>

                                                <div class="video-post-big-img">

                                                    <video width="70%" height="100%" controls poster="<?php echo get_the_post_thumbnail_url() ?>">
                                                        <source src="<?php echo get_post_meta(get_the_ID(), 'video_link' , true) ?>" type="video/mp4">
                                                    </video>
                                                </div>

                                                <?php
                                            }
                                            ?>


                                            <nav class="sharee col_12" id="sharee">
                                                <div class="mooooooo">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8284 12L16.2426 13.4142L19.071 10.5858C20.6331 9.02365 20.6331 6.49099 19.071 4.9289C17.509 3.3668 14.9763 3.3668 13.4142 4.9289L10.5858 7.75732L12 9.17154L14.8284 6.34311C15.6095 5.56206 16.8758 5.56206 17.6568 6.34311C18.4379 7.12416 18.4379 8.39049 17.6568 9.17154L14.8284 12Z" fill="currentColor" /><path d="M12 14.8285L13.4142 16.2427L10.5858 19.0711C9.02372 20.6332 6.49106 20.6332 4.92896 19.0711C3.36686 17.509 3.36686 14.9764 4.92896 13.4143L7.75739 10.5858L9.1716 12L6.34317 14.8285C5.56212 15.6095 5.56212 16.8758 6.34317 17.6569C7.12422 18.4379 8.39055 18.4379 9.1716 17.6569L12 14.8285Z" fill="currentColor" /><path d="M14.8285 10.5857C15.219 10.1952 15.219 9.56199 14.8285 9.17147C14.4379 8.78094 13.8048 8.78094 13.4142 9.17147L9.1716 13.4141C8.78107 13.8046 8.78107 14.4378 9.1716 14.8283C9.56212 15.2188 10.1953 15.2188 10.5858 14.8283L14.8285 10.5857Z" fill="currentColor" /></svg>
                                                    <div class="link">
                                                        <?php $sh_link = wp_get_shortlink();
                                                        ?>
                                                        <span class="hox"  onclick="copyToClipboard('#link-sh')" id="link-sh"><?php echo $sh_link; ?></span>
                                                    </div>
                                                    <span class="tooltiptext" id="chmtn-1">کپی</span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php <?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://telegram.me/share/url?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank" >
                                                            <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                                                    .st0{fill:url(#SVGID_1_);}
                                                                    .st1{fill:#FFFFFF;}
                                                                    .st2{fill:#D2E4F0;}
                                                                    .st3{fill:#B5CFE4;}
                                                                </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="256" x2="256" y1="0" y2="510.1322"><stop offset="0" style="stop-color:#41BCE7"/><stop offset="1" style="stop-color:#22A6DC"/></linearGradient><circle class="st0" cx="256" cy="256" r="256"/><g><path class="st1" d="M380.6,147.3l-45.7,230.5c0,0-6.4,16-24,8.3l-105.5-80.9L167,286.7l-64.6-21.7c0,0-9.9-3.5-10.9-11.2    c-1-7.7,11.2-11.8,11.2-11.8l256.8-100.7C359.5,141.2,380.6,131.9,380.6,147.3z"/><path class="st2" d="M197.2,375.2c0,0-3.1-0.3-6.9-12.4c-3.8-12.1-23.3-76.1-23.3-76.1l155.1-98.5c0,0,9-5.4,8.6,0    c0,0,1.6,1-3.2,5.4c-4.8,4.5-121.8,109.7-121.8,109.7"/><path class="st3" d="M245.8,336.2l-41.7,38.1c0,0-3.3,2.5-6.8,0.9l8-70.7"/></g></g></svg>                                                </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M448,512l-384,0c-35.328,0 -64,-28.672 -64,-64l0,-384c0,-35.328 28.672,-64 64,-64l384,0c35.328,0 64,28.672 64,64l0,384c0,35.328 -28.672,64 -64,64Z" id="Dark_Blue" style="fill:#1da1f2;fill-rule:nonzero;"/><path d="M196.608,386.048c120.704,0 186.752,-100.096 186.752,-186.752c0,-2.816 0,-5.632 -0.128,-8.448c12.8,-9.216 23.936,-20.864 32.768,-34.048c-11.776,5.248 -24.448,8.704 -37.76,10.368c13.568,-8.064 23.936,-20.992 28.928,-36.352c-12.672,7.552 -26.752,12.928 -41.728,15.872c-12.032,-12.8 -29.056,-20.736 -47.872,-20.736c-36.224,0 -65.664,29.44 -65.664,65.664c0,5.12 0.64,10.112 1.664,14.976c-54.528,-2.688 -102.912,-28.928 -135.296,-68.608c-5.632,9.728 -8.832,20.992 -8.832,33.024c0,22.784 11.648,42.88 29.184,54.656c-10.752,-0.384 -20.864,-3.328 -29.696,-8.192l0,0.896c0,31.744 22.656,58.368 52.608,64.384c-5.504,1.536 -11.264,2.304 -17.28,2.304c-4.224,0 -8.32,-0.384 -12.288,-1.152c8.32,26.112 32.64,45.056 61.312,45.568c-22.528,17.664 -50.816,28.16 -81.536,28.16c-5.248,0 -10.496,-0.256 -15.616,-0.896c28.928,18.432 63.488,29.312 100.48,29.312" id="Logo__x2014__FIXED" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g id="WhatsApp-Logo-Icon"><path d="M116.225,-0.001c-11.264,0.512 -26.112,1.536 -32.768,3.072c-10.24,2.048 -19.968,5.12 -27.648,9.216c-9.728,4.608 -17.92,10.752 -25.088,17.92c-7.68,7.68 -13.824,15.872 -18.432,25.6c-4.096,7.68 -7.168,17.408 -9.216,27.648c-1.536,6.656 -2.56,21.504 -2.56,32.768c-0.512,4.608 -0.512,10.752 -0.512,13.824l0,251.905l0,13.824c0.512,11.264 1.536,26.112 3.072,32.768c2.048,10.24 5.12,19.968 9.216,27.648c4.608,9.728 10.752,17.92 17.92,25.088c7.68,7.68 15.872,13.824 25.6,18.432c7.68,4.096 17.408,7.168 27.648,9.216c6.656,1.536 21.504,2.56 32.768,2.56c4.608,0.512 10.752,0.512 13.824,0.512l251.904,0l13.824,0c11.264,-0.512 26.112,-1.536 32.768,-3.072c10.24,-2.048 19.968,-5.12 27.648,-9.216c9.728,-4.608 17.92,-10.752 25.088,-17.92c7.68,-7.68 13.824,-15.872 18.432,-25.6c4.096,-7.68 7.168,-17.408 9.216,-27.648c1.536,-6.656 2.56,-21.504 2.56,-32.768c0.512,-4.608 0.512,-10.752 0.512,-13.824l0,-265.729c-0.512,-11.264 -1.536,-26.112 -3.072,-32.768c-2.048,-10.24 -5.12,-19.968 -9.216,-27.648c-4.608,-9.728 -10.752,-17.92 -17.92,-25.088c-7.68,-7.68 -15.872,-13.824 -25.6,-18.432c-7.68,-4.096 -17.408,-7.168 -27.648,-9.216c-6.656,-1.536 -21.504,-2.56 -32.768,-2.56c-4.608,-0.512 -10.752,-0.512 -13.824,-0.512l-265.728,0Z" style="fill:url(#_Linear1);fill-rule:nonzero;"/><path d="M344.754,289.698c-4.56,-2.282 -26.98,-13.311 -31.161,-14.832c-4.18,-1.521 -7.219,-2.282 -10.259,2.282c-3.041,4.564 -11.78,14.832 -14.44,17.875c-2.66,3.042 -5.32,3.423 -9.88,1.14c-4.561,-2.281 -19.254,-7.095 -36.672,-22.627c-13.556,-12.087 -22.709,-27.017 -25.369,-31.581c-2.66,-4.564 -0.283,-7.031 2,-9.304c2.051,-2.041 4.56,-5.324 6.84,-7.986c2.28,-2.662 3.04,-4.564 4.56,-7.606c1.52,-3.042 0.76,-5.705 -0.38,-7.987c-1.14,-2.282 -10.26,-24.72 -14.06,-33.848c-3.701,-8.889 -7.461,-7.686 -10.26,-7.826c-2.657,-0.132 -5.7,-0.16 -8.74,-0.16c-3.041,0 -7.98,1.141 -12.161,5.704c-4.18,4.564 -15.96,15.594 -15.96,38.032c0,22.438 16.34,44.116 18.62,47.159c2.281,3.043 32.157,49.089 77.902,68.836c10.88,4.697 19.374,7.501 25.997,9.603c10.924,3.469 20.866,2.98 28.723,1.806c8.761,-1.309 26.98,-11.029 30.781,-21.677c3.799,-10.649 3.799,-19.777 2.659,-21.678c-1.139,-1.902 -4.179,-3.043 -8.74,-5.325m-83.207,113.573l-0.061,0c-27.22,-0.011 -53.917,-7.32 -77.207,-21.137l-5.539,-3.287l-57.413,15.056l15.325,-55.959l-3.608,-5.736c-15.184,-24.145 -23.203,-52.051 -23.192,-80.704c0.033,-83.611 68.083,-151.635 151.756,-151.635c40.517,0.016 78.603,15.811 107.243,44.474c28.64,28.663 44.404,66.764 44.389,107.283c-0.035,83.617 -68.083,151.645 -151.693,151.645m129.102,-280.709c-34.457,-34.486 -80.281,-53.487 -129.103,-53.507c-100.595,0 -182.468,81.841 -182.508,182.437c-0.013,32.156 8.39,63.546 24.361,91.212l-25.892,94.545l96.75,-25.37c26.657,14.535 56.67,22.194 87.216,22.207l0.075,0c100.586,0 182.465,-81.852 182.506,-182.448c0.019,-48.751 -18.946,-94.59 -53.405,-129.076" style="fill:#fff;"/></g><defs><linearGradient gradientTransform="matrix(0,-512,-512,0,256.001,512)" gradientUnits="userSpaceOnUse" id="_Linear1" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#25cf43;stop-opacity:1"/><stop offset="1" style="stop-color:#61fd7d;stop-opacity:1"/></linearGradient></defs></svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="javan-comments" id="javan-comments">
                                    <?php
                                    while (have_posts()){
                                        the_post();
                                        comments_template('', true);
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <?php dynamic_sidebar('home_sidebar_12'); ?>

                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="col-md-9">
                                <div class="single-post">
                                    <div class="single-post-img">
                                        <div class="time">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 7H11V12H16V14H9V7Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor" /></svg>
                                            <?php echo wp_date(' d F Y ') ?>
                                        </span>
                                            -
                                            <span><?php echo WP_date("H:i");  ?></span>
                                            <span class="left">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 18H17V16H7V18Z" fill="currentColor" /><path d="M17 14H7V12H17V14Z" fill="currentColor" /><path d="M7 10H11V8H7V10Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z" fill="currentColor" /></svg>
                                            <?php echo get_the_ID() ?>
                                        </span>
                                        </div>
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail();
                                        }else {
                                            ?>
                                            <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                                            <?php
                                        }
                                        ?>

                                        <div class="daste">
                                            <ul>
                                                <?php

                                                $category = get_the_terms( get_the_ID(), 'video_category' );
                                                if($category){
                                                    foreach ( $category as $cat){
                                                        echo '<li><a href=" ' . get_term_link($cat->slug, 'video_category') . ' ">' . $cat->name . '</a></li>';
                                                    }
                                                }

                                                ?>
                                            </ul>

                                        </div>

                                        <div class="more">
                                            <a href="#javan-comments">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9H7V7H17V9Z" fill="currentColor" /><path d="M7 13H17V11H7V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z" fill="currentColor" /></svg>
                                                نظر</a>
                                            <a href="#sharee">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 6.12549 15.0077 6.24919 15.0227 6.37063L8.08261 9.84066C7.54305 9.32015 6.80891 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15C6.80891 15 7.54305 14.6798 8.08261 14.1593L15.0227 17.6294C15.0077 17.7508 15 17.8745 15 18C15 19.6569 16.3431 21 18 21C19.6569 21 21 19.6569 21 18C21 16.3431 19.6569 15 18 15C17.1911 15 16.457 15.3202 15.9174 15.8407L8.97733 12.3706C8.99229 12.2492 9 12.1255 9 12C9 11.8745 8.99229 11.7508 8.97733 11.6294L15.9174 8.15934C16.457 8.67985 17.1911 9 18 9Z" fill="currentColor" /></svg>
                                                اشتراک گداری
                                            </a>
                                        </div>

                                    </div>
                                    <div class="single-post-content">
                                        <div class="title">
                                            <h1><?php the_title(); ?></h1>
                                            <h2><strong>
                                                    <?php the_excerpt()  ?>
                                                </strong></h2>
                                        </div>
                                        <div class="content">

                                            <?php the_content(); ?>

                                            <?php
                                            if(get_post_meta(get_the_ID(), 'video_link' , true)){
                                            ?>

                                            <div class="video-post-big-img">

                                                <video width="70%" height="100%" controls poster="<?php echo get_the_post_thumbnail_url() ?>">
                                                    <source src="<?php echo get_post_meta(get_the_ID(), 'video_link' , true) ?>" type="video/mp4">
                                                </video>
                                            </div>

                                            <?php
                                            }
                                            ?>

                                            <nav class="sharee col_12" id="sharee">
                                                <div class="mooooooo">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8284 12L16.2426 13.4142L19.071 10.5858C20.6331 9.02365 20.6331 6.49099 19.071 4.9289C17.509 3.3668 14.9763 3.3668 13.4142 4.9289L10.5858 7.75732L12 9.17154L14.8284 6.34311C15.6095 5.56206 16.8758 5.56206 17.6568 6.34311C18.4379 7.12416 18.4379 8.39049 17.6568 9.17154L14.8284 12Z" fill="currentColor" /><path d="M12 14.8285L13.4142 16.2427L10.5858 19.0711C9.02372 20.6332 6.49106 20.6332 4.92896 19.0711C3.36686 17.509 3.36686 14.9764 4.92896 13.4143L7.75739 10.5858L9.1716 12L6.34317 14.8285C5.56212 15.6095 5.56212 16.8758 6.34317 17.6569C7.12422 18.4379 8.39055 18.4379 9.1716 17.6569L12 14.8285Z" fill="currentColor" /><path d="M14.8285 10.5857C15.219 10.1952 15.219 9.56199 14.8285 9.17147C14.4379 8.78094 13.8048 8.78094 13.4142 9.17147L9.1716 13.4141C8.78107 13.8046 8.78107 14.4378 9.1716 14.8283C9.56212 15.2188 10.1953 15.2188 10.5858 14.8283L14.8285 10.5857Z" fill="currentColor" /></svg>
                                                    <div class="link">
                                                        <?php $sh_link = wp_get_shortlink();
                                                        ?>
                                                        <span class="hox"  onclick="copyToClipboard('#link-sh')" id="link-sh"><?php echo $sh_link; ?></span>
                                                    </div>
                                                    <span class="tooltiptext" id="chmtn-1">کپی</span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php <?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://telegram.me/share/url?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank" >
                                                            <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                                                                    .st0{fill:url(#SVGID_1_);}
                                                                    .st1{fill:#FFFFFF;}
                                                                    .st2{fill:#D2E4F0;}
                                                                    .st3{fill:#B5CFE4;}
                                                                </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="256" x2="256" y1="0" y2="510.1322"><stop offset="0" style="stop-color:#41BCE7"/><stop offset="1" style="stop-color:#22A6DC"/></linearGradient><circle class="st0" cx="256" cy="256" r="256"/><g><path class="st1" d="M380.6,147.3l-45.7,230.5c0,0-6.4,16-24,8.3l-105.5-80.9L167,286.7l-64.6-21.7c0,0-9.9-3.5-10.9-11.2    c-1-7.7,11.2-11.8,11.2-11.8l256.8-100.7C359.5,141.2,380.6,131.9,380.6,147.3z"/><path class="st2" d="M197.2,375.2c0,0-3.1-0.3-6.9-12.4c-3.8-12.1-23.3-76.1-23.3-76.1l155.1-98.5c0,0,9-5.4,8.6,0    c0,0,1.6,1-3.2,5.4c-4.8,4.5-121.8,109.7-121.8,109.7"/><path class="st3" d="M245.8,336.2l-41.7,38.1c0,0-3.3,2.5-6.8,0.9l8-70.7"/></g></g></svg>                                                </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/intent/tweet?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE   PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M448,512l-384,0c-35.328,0 -64,-28.672 -64,-64l0,-384c0,-35.328 28.672,-64 64,-64l384,0c35.328,0 64,28.672 64,64l0,384c0,35.328 -28.672,64 -64,64Z" id="Dark_Blue" style="fill:#1da1f2;fill-rule:nonzero;"/><path d="M196.608,386.048c120.704,0 186.752,-100.096 186.752,-186.752c0,-2.816 0,-5.632 -0.128,-8.448c12.8,-9.216 23.936,-20.864 32.768,-34.048c-11.776,5.248 -24.448,8.704 -37.76,10.368c13.568,-8.064 23.936,-20.992 28.928,-36.352c-12.672,7.552 -26.752,12.928 -41.728,15.872c-12.032,-12.8 -29.056,-20.736 -47.872,-20.736c-36.224,0 -65.664,29.44 -65.664,65.664c0,5.12 0.64,10.112 1.664,14.976c-54.528,-2.688 -102.912,-28.928 -135.296,-68.608c-5.632,9.728 -8.832,20.992 -8.832,33.024c0,22.784 11.648,42.88 29.184,54.656c-10.752,-0.384 -20.864,-3.328 -29.696,-8.192l0,0.896c0,31.744 22.656,58.368 52.608,64.384c-5.504,1.536 -11.264,2.304 -17.28,2.304c-4.224,0 -8.32,-0.384 -12.288,-1.152c8.32,26.112 32.64,45.056 61.312,45.568c-22.528,17.664 -50.816,28.16 -81.536,28.16c-5.248,0 -10.496,-0.256 -15.616,-0.896c28.928,18.432 63.488,29.312 100.48,29.312" id="Logo__x2014__FIXED" style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?url=<?php echo $sh_link; ?>&text=<?php echo get_the_title(); ?>" target="_blank">
                                                            <!DOCTYPE  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink"><g id="WhatsApp-Logo-Icon"><path d="M116.225,-0.001c-11.264,0.512 -26.112,1.536 -32.768,3.072c-10.24,2.048 -19.968,5.12 -27.648,9.216c-9.728,4.608 -17.92,10.752 -25.088,17.92c-7.68,7.68 -13.824,15.872 -18.432,25.6c-4.096,7.68 -7.168,17.408 -9.216,27.648c-1.536,6.656 -2.56,21.504 -2.56,32.768c-0.512,4.608 -0.512,10.752 -0.512,13.824l0,251.905l0,13.824c0.512,11.264 1.536,26.112 3.072,32.768c2.048,10.24 5.12,19.968 9.216,27.648c4.608,9.728 10.752,17.92 17.92,25.088c7.68,7.68 15.872,13.824 25.6,18.432c7.68,4.096 17.408,7.168 27.648,9.216c6.656,1.536 21.504,2.56 32.768,2.56c4.608,0.512 10.752,0.512 13.824,0.512l251.904,0l13.824,0c11.264,-0.512 26.112,-1.536 32.768,-3.072c10.24,-2.048 19.968,-5.12 27.648,-9.216c9.728,-4.608 17.92,-10.752 25.088,-17.92c7.68,-7.68 13.824,-15.872 18.432,-25.6c4.096,-7.68 7.168,-17.408 9.216,-27.648c1.536,-6.656 2.56,-21.504 2.56,-32.768c0.512,-4.608 0.512,-10.752 0.512,-13.824l0,-265.729c-0.512,-11.264 -1.536,-26.112 -3.072,-32.768c-2.048,-10.24 -5.12,-19.968 -9.216,-27.648c-4.608,-9.728 -10.752,-17.92 -17.92,-25.088c-7.68,-7.68 -15.872,-13.824 -25.6,-18.432c-7.68,-4.096 -17.408,-7.168 -27.648,-9.216c-6.656,-1.536 -21.504,-2.56 -32.768,-2.56c-4.608,-0.512 -10.752,-0.512 -13.824,-0.512l-265.728,0Z" style="fill:url(#_Linear1);fill-rule:nonzero;"/><path d="M344.754,289.698c-4.56,-2.282 -26.98,-13.311 -31.161,-14.832c-4.18,-1.521 -7.219,-2.282 -10.259,2.282c-3.041,4.564 -11.78,14.832 -14.44,17.875c-2.66,3.042 -5.32,3.423 -9.88,1.14c-4.561,-2.281 -19.254,-7.095 -36.672,-22.627c-13.556,-12.087 -22.709,-27.017 -25.369,-31.581c-2.66,-4.564 -0.283,-7.031 2,-9.304c2.051,-2.041 4.56,-5.324 6.84,-7.986c2.28,-2.662 3.04,-4.564 4.56,-7.606c1.52,-3.042 0.76,-5.705 -0.38,-7.987c-1.14,-2.282 -10.26,-24.72 -14.06,-33.848c-3.701,-8.889 -7.461,-7.686 -10.26,-7.826c-2.657,-0.132 -5.7,-0.16 -8.74,-0.16c-3.041,0 -7.98,1.141 -12.161,5.704c-4.18,4.564 -15.96,15.594 -15.96,38.032c0,22.438 16.34,44.116 18.62,47.159c2.281,3.043 32.157,49.089 77.902,68.836c10.88,4.697 19.374,7.501 25.997,9.603c10.924,3.469 20.866,2.98 28.723,1.806c8.761,-1.309 26.98,-11.029 30.781,-21.677c3.799,-10.649 3.799,-19.777 2.659,-21.678c-1.139,-1.902 -4.179,-3.043 -8.74,-5.325m-83.207,113.573l-0.061,0c-27.22,-0.011 -53.917,-7.32 -77.207,-21.137l-5.539,-3.287l-57.413,15.056l15.325,-55.959l-3.608,-5.736c-15.184,-24.145 -23.203,-52.051 -23.192,-80.704c0.033,-83.611 68.083,-151.635 151.756,-151.635c40.517,0.016 78.603,15.811 107.243,44.474c28.64,28.663 44.404,66.764 44.389,107.283c-0.035,83.617 -68.083,151.645 -151.693,151.645m129.102,-280.709c-34.457,-34.486 -80.281,-53.487 -129.103,-53.507c-100.595,0 -182.468,81.841 -182.508,182.437c-0.013,32.156 8.39,63.546 24.361,91.212l-25.892,94.545l96.75,-25.37c26.657,14.535 56.67,22.194 87.216,22.207l0.075,0c100.586,0 182.465,-81.852 182.506,-182.448c0.019,-48.751 -18.946,-94.59 -53.405,-129.076" style="fill:#fff;"/></g><defs><linearGradient gradientTransform="matrix(0,-512,-512,0,256.001,512)" gradientUnits="userSpaceOnUse" id="_Linear1" x1="0" x2="1" y1="0" y2="0"><stop offset="0" style="stop-color:#25cf43;stop-opacity:1"/><stop offset="1" style="stop-color:#61fd7d;stop-opacity:1"/></linearGradient></defs></svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="javan-comments" id="javan-comments">
                                    <?php
                                    while (have_posts()){
                                        the_post();
                                        comments_template('', true);
                                    }
                                    ?>
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
