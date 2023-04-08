<?php

$logo = get_template_directory_uri() . '/assets/img/j-logo-60.png' ;

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {
    $prefix = 'my_framework';

    CSF::createOptions( $prefix, array(
        'menu_title' => 'تنظیمات پوسته',
        'menu_slug'  => 'my-framework',
        'framework_title'         => 'تنظیمات پوسته جوان نیوز <small><b>اکسپلوریت</b></small>',
        'menu_position'           => 60,
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'هدر',
        'fields' => array(

            // A textarea field
            array(
                'id'    => 'logo',
                'type'  => 'upload',
                'title' => 'تصویر لوگو',
                'library'      => 'image',
                'placeholder'  => 'http://',
                'button_title' => 'اضافه کردن تصویر',
                'remove_title' => 'حذف تصویر',
                'default'    => $logo
            ),


            array(
                'id'         => 'logo-side',
                'type'       => 'radio',
                'title'      => 'نمایش لوگو',
                'options'    => array(
                    'option-1' => 'فقط لوگو (سایز60 * 280)' ,
                    'option-2' => 'لوگو و متن (سایز 60 * 60)',
                    'option-3' => 'فقط متن',

                ),
                'default'    => 'option-2'
            ),



            array(
                'id'    => 'icon-link-instagram',
                'type'  => 'text',
                'title' => 'لینک اینستاگرام',
                'add_title'    => 'افزودن لینک',
                'edit_title'   => 'ویرایش',
                'remove_title' => 'حذف لینک',
                'placeholder'  => 'https://',
            ),
            array(
                'id'    => 'icon-link-telegram',
                'type'  => 'text',
                'title' => 'لینک تلگرام',
                'add_title'    => 'افزودن لینک',
                'edit_title'   => 'ویرایش',
                'remove_title' => 'حذف لینک',
                'placeholder'  => 'https://',
            ),
            array(
                'id'    => 'icon-link-twitter',
                'type'  => 'text',
                'title' => 'لینک توییتر',
                'add_title'    => 'افزودن لینک',
                'edit_title'   => 'ویرایش',
                'remove_title' => 'حذف لینک',
                'placeholder'  => 'https://',
            ),
            array(
                'id'    => 'icon-link-youtube',
                'type'  => 'text',
                'title' => 'لینک یوتیوب',
                'add_title'    => 'افزودن لینک',
                'edit_title'   => 'ویرایش',
                'remove_title' => 'حذف لینک',
                'placeholder'  => 'https://',
            ),



        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'محتوای سایت',
        'fields' => array(

            array(
                'id'    => 'top-on-off',
                'type'  => 'switcher',
                'title' => 'اسلایدر بخش بالا نمایش داده شود؟',
                'text_on'  => 'Yes',
                'text_off' => 'No',
                'default' => 1,
            ),

            array(
                'id'          => 'cat-select',
                'type'        => 'checkbox',
                'title'       => 'دسته بندی اسلایدر بخش بالا',
                'options'     => 'categories',
                'desc'     => '( برای نمایش پست های اخیر دسته بندی انتخاب نکنید )',
            ),

            array(
                'id'          => 'cat-select1',
                'type'        => 'checkbox',
                'title'       => 'دسته بندی پست ها',
                'options'     => 'categories',
                'desc'     => '( برای نمایش پست های اخیر دسته بندی انتخاب نکنید )',
            ),

        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'بخش ویدیو',
        'fields' => array(


            array(
                'id'    => 'on-off-video',
                'type'  => 'switcher',
                'title' => 'این بلوک نمایش داده شود؟',
                'text_on'  => 'yes',
                'text_off' => 'no',
                'default' => 1,
            ),
            array(
                'id'    => 'on-off-single-video',
                'type'  => 'switcher',
                'title' => 'دارک مود صفحه ویدیو',
                'text_on'  => 'on',
                'text_off' => 'off',
                'default' => 1,
            ),

            array(
                'id'    => 'video-title',
                'type'  => 'text',
                'title' => ' عنوان',
                'default' => 'بخش ویدیو',
            ),

            array(
                'id'         => 'video',
                'type'       => 'image_select',
                'title'      => 'جایگاه بخش ویدیو',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right-video.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left-video.png',


                ),
                'default'    => 'option-2'
            ),


            array(
                'id'         => 'single-video',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه ویدیو',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center.png',

                ),
                'default'    => 'option-2'
            ),





        )
    ) );


    CSF::createSection( $prefix, array(
        'title'  => 'مطالب پایین سایت',
        'fields' => array(


            array(
                'id'    => 'on-off-images',
                'type'  => 'switcher',
                'title' => 'این بلوک نمایش داده شود؟',
                'text_on'  => 'Yes',
                'text_off' => 'No',
                'default' => 1,
            ),

            array(
                'id'    => 'image-title',
                'type'  => 'text',
                'title' => ' عنوان',
                'default' => 'اقتصادی',
            ),


            array(
                'id'          => 'cat-select-image',
                'type'        => 'checkbox',
                'title'       => 'دسته بندی پست ها ',
                'options'     => 'categories',
                'desc'     => '( برای نمایش پست های اخیر دسته بندی انتخاب نکنید )',
            ),




        )
    ) );



    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'فوتر',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'footer-title',
                'type'  => 'text',
                'title' => ' عنوان',
                'placeholder'  => 'درباره ما',
                'default' => 'درباره ما',
            ),

            //
            // A text field
            array(
                'id'    => 'footer-text',
                'type'  => 'textarea',
                'title' => 'متن عنوان',
                'placeholder'  => 'توضیحات سایت',
                'default' => 'اکسپلوریت یک جرقه در صنعت توسعه وب فارسی (تحت پلتفرم وردپرس) می‌باشد که توسط تیم مدیریت و اجرا میشود، هدف از ایجاد اکسپلوریت آموزش، طراحی، تولید و فروش محصولات وب فارسی میباشد که در آینده نچندان دور بسیار امکانات جدید برای بهبود و سهولت طراحی وبسایت برای کاربران رونمایی خواهد شد.',
            ),


            array(
                'id'    => 'footer-about',
                'type'  => 'text',
                'title' => 'توضیحات سایت به انگلیسی',
                'placeholder'  => 'THE WORDPRESS THEME POWERD BY EXPLORIT',
                'default' => 'THE WORDPRESS THEME POWERD BY EXPLORIT',
            ),

            //
            // A text field
            array(
                'id'    => 'footer-brand',
                'type'  => 'text',
                'title' => 'نام سایت به انگلیسی',
                'placeholder'  => 'Javan theme',
                'default' => 'Javan Theme',
            ),


            //
            // A text field
            array(
                'id'    => 'footer-foot',
                'type'  => 'text',
                'title' => 'متن کپی رایت',
                'placeholder'  => 'کلیه حقوق این سایت ...',
                'default' => 'کليه حقوق این محصول متعلق به اکسپلوریت می باشد و هر گونه کپی برداری از محصول غیر مجاز و بدون رضایت ماست.',
            ),





        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'صفحه خبر',
        'fields' => array(

            array(
                'id'         => 'single',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه خبر',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center.png',

                ),
                'default'    => 'option-2'
            ),

            array(
                'id'    => 'on-off-single',
                'type'  => 'switcher',
                'title' => 'مطالب مرتبط نمایش داده شود؟',
                'text_on'  => 'Yes',
                'text_off' => 'No',
                'default' => 1,
            ),


        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'چیدمان',
        'fields' => array(

            array(
                'id'         => 'index',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه اصلی',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center.png',

                ),
                'default'    => 'option-2'
            ),

            array(
                'id'         => 'single',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه خبر',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center.png',

                ),
                'default'    => 'option-2'
            ),


            array(
                'id'         => 'pages',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه ها',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right-mkm.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left-mkm.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center1.png',
                ),
                'default'    => 'option-2'
            ),


            array(
                'id'         => 'pages-p',
                'type'       => 'image_select',
                'title'      => 'چیدمان صفحه ها (داخلی)',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/right-pages.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/left-pages.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/center2.png',
                ),
                'default'    => 'option-2'
            ),

        )
    ) );


    CSF::createSection( $prefix, array(
        'title'  => 'رنگبندی',
        'fields' => array(

            array(
                'id'         => 'color-seg',
                'type'       => 'image_select',
                'title'      => 'رنگ های پیشنهادی',
                'options'    => array(
                    'option-1' => get_template_directory_uri()  . '/assets/img/red.png' ,
                    'option-2' => get_template_directory_uri()  . '/assets/img/green.png',
                    'option-3' => get_template_directory_uri()  . '/assets/img/blue.png',
                    'option-4' => get_template_directory_uri()  . '/assets/img/more.png',
                ),
                'default'    => 'option-1',
                'desc'     => '(برای استفاده از رنگبندی دلخواه گزینه آخر (000) را انتخاب کرده و سپس از بخش زیر رنگ دلخواه خود را انتخاب کنید)',

            ),




            array(
                'id'    => 'opt-color-1',
                'type'  => 'color',
                'title' => 'رنگ دلخواه',
            ),



        )

    ) );




    CSF::createSection( $prefix, array(
        'title'  => 'کد های اضافی',
        'fields' => array(

            array(
                'id'    => 'opt-code-editor-1',
                'type'  => 'code_editor',
                'title' => 'کد های css خود را وارد کنید',
            ),



            array(
                'id'    => 'opt-code-editor-2',
                'type'  => 'code_editor',
                'title' => 'کد های js خود را وارد کنید',
            ),


        )
    ) );


    CSF::createSection( $prefix, array(
        'title'  => 'پشتیبانی',
        'fields' => array(



            array(
                'type'    => 'content',
                'content' => '
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                </svg>
                                تیکت بزنید</a>
                                <span>( اگر سایت شما مشکلی دارد برای ما تیکت بزنید. )</span>
                                ',
            ),

            array(
                'type'    => 'content',
                'content' => '<a class="one" href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path> </svg>ارتباط با ما</a>
                              <span>( برای اضافه کردن امکانات دلخواه خود به قالب با ما در ارتباط باشید. )</span>',
            ),


        )
    ) );




    CSF::createSection( $prefix, array(
        'title'  => 'مرکز آموزش',
        'fields' => array(

            array(
                'type'    => 'content',
                'content' => '<span>برای آشنایی به کار کردن با این پوسته و یافتن سوالات خود از لینک های زیر استفاده کنید :</span>',
            ),


            array(
                'type'    => 'content',
                'content' => learning(),
            ),


        )
    ) );
}













