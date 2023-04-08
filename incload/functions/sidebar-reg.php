<?php


function widgets_init() {

    register_sidebar( array(
        'name'          => 'جایگاه سایدبار صفحه اصلی',
        'id'            => 'home_sidebar_1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init' );

function widgets_init_2() {

    register_sidebar( array(
        'name'          => 'جایگاه سایدبار صفحه اصلی 2',
        'id'            => 'home_sidebar_2',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_2' );





function widgets_init_4() {

    register_sidebar( array(
        'name'          => 'جایگاه سایدبار صفحه خبر ',
        'id'            => 'home_sidebar_4',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_4' );


function category_sidebar() {
    register_sidebar( array(
        'name'          => __( 'جایگاه سایدبار دسته بندی' ),
        'id'            => 'category_sidebar_1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'category_sidebar' );



function widgets_init_3() {

    register_sidebar( array(
        'name'          => ' جایگاه سایدبار دسته بندی 2',
        'id'            => 'home_sidebar_3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_3' );


function widgets_init_5() {

    register_sidebar( array(
        'name'          => ' سایدبار صفحه تگ',
        'id'            => 'home_sidebar_5',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_5' );


function widgets_init_6() {

    register_sidebar( array(
        'name'          => ' سایدبار صفحه تگ2',
        'id'            => 'home_sidebar_6',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_6' );


function widgets_init_7() {

    register_sidebar( array(
        'name'          => ' سایدبار صفحه سرچ',
        'id'            => 'home_sidebar_7',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_7' );


function widgets_init_8() {

    register_sidebar( array(
        'name'          => ' سایدبار صفحه سرچ 2',
        'id'            => 'home_sidebar_8',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_8' );

function widgets_init_12() {

    register_sidebar( array(
        'name'          => ' سایدبار صفحه ویدیو',
        'id'            => 'home_sidebar_12',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'widgets_init_12' );