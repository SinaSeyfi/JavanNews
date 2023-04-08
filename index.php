<?php

get_header();

if($_GET['clip'] == "show"){
    echo get_template_part('sections/category/javan','video');
}else{
    echo get_template_part('sections/index/javan','top-posts');

    echo get_template_part('sections/index/javan','main-posts');

    echo get_template_part('sections/index/javan','video-post');

    echo get_template_part('sections/index/javan','daily-photo');
}



get_footer();

?>

