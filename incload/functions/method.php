<?php
function gtp($url){
    echo get_template_part($url);
}

function uri($url){
    echo get_template_directory_uri() . "/" . $url;
}
