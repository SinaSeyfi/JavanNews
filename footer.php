<?php $options = get_option( 'my_framework' ); ?>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row row-align-item-center">
                <div class="col-lg-9 col-md-8">
                    <nav>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4">
                    <form action="<?php echo get_site_url(); ?>" method="get">
                        <label for="texts"></label>
                        <input type="text" id="texts" name="s" placeholder="جستجو کنید" value="<?php if(is_search()){echo $_GET['s'];} ?>">
                        <button type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor" /></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-menu">

                        <span>
                            <?php echo $options['footer-title']; ?>
                        </span>
                        <p>
                            <?php echo $options['footer-text']; ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-6">
                    <div class="footer-menu">
                        <span><?php echo wp_get_nav_menu_name('footer-menu1'); ?></span>
                        <ul>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu1' ) ); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-6">
                    <div class="footer-menu">
                        <span><?php echo wp_get_nav_menu_name('footer-menu2'); ?></span>
                        <ul>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu2' ) ); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-6">
                    <div class="footer-menu">
                        <span><?php echo wp_get_nav_menu_name('footer-menu3'); ?></span>
                        <ul>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu3' ) ); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-brand">
        <div class="container">
            <div class="row row-align-item-center footer-foot">
                <div class="col-md-4">
                    <nav>
                        <ul>
                            <li>
                                <a href="<?php   echo $options['icon-link-instagram'];  ?>" target="_blank">
                                    <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
<g>
    <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
		c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/>
    <circle cx="41.5" cy="16.4" r="2.9"/>
    <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
		h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
		s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
		c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z"/>
</g>
</svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php $options = get_option( 'my_framework' );  echo $options['icon-link-telegram'];  ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  echo $options['icon-link-twitter'];  ?>" target="_blank">
                                    <!DOCTYPE  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="<?php  echo $options['icon-link-youtube'];  ?>" target="_blank">
                                    <!DOCTYPE  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M508.6,148.8c0-45-33.1-81.2-74-81.2C379.2,65,322.7,64,265,64c-3,0-6,0-9,0s-6,0-9,0c-57.6,0-114.2,1-169.6,3.6   c-40.8,0-73.9,36.4-73.9,81.4C1,184.6-0.1,220.2,0,255.8C-0.1,291.4,1,327,3.4,362.7c0,45,33.1,81.5,73.9,81.5   c58.2,2.7,117.9,3.9,178.6,3.8c60.8,0.2,120.3-1,178.6-3.8c40.9,0,74-36.5,74-81.5c2.4-35.7,3.5-71.3,3.4-107   C512.1,220.1,511,184.5,508.6,148.8z M207,353.9V157.4l145,98.2L207,353.9z"/></g></svg>                            </a>
                            </li>




                        </ul>
                    </nav>
                </div>
                <div class="col-md-4">
                    <div class="brand">
                        <img src="<?php uri('assets/img/logo.png') ?>" alt="">
                        <span>
                            <?php echo $options['footer-about']; ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-name">
                        <span>
                            <?php echo $options['footer-brand']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row ft-bt row-align-item-center">
                <div class="col-lg-6 col-md-12">
                    <span>
                        <?php

                            echo $options['footer-foot'];
                        ?>
                    </span>
                </div>
                <div class="col-lg-6 col-md-12">
                    <span class="fll">اکسپلوریت</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#top" class="go-top"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
    </svg></a>
<script src="<?php uri('assets/js/jquery.min.js') ?>" defer></script>
<script src="<?php uri('bootstrap/js/bootstrap.min.js') ?>" defer></script>
<script src="<?php uri('assets/js/index.js') ?>" defer></script>
<?php include "incload/functions/more-js.php"; ?>
<?php wp_footer() ?>
</body>

</html>