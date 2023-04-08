

<?php
//dvsbdfnbndxttfgrrthws
    ?>



<?php
/**
 * Shewaz-Desire theme comments.pgp
 */

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
    <p class="nocomments"><?php _e( 'این نوشته با پسورد محافظت شده است.', 'shewaz' ); ?></p>
    <?php
    return;
}
?>
<?php if ( have_comments() ) :

?>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
            <div class="nav-previous"><?php previous_comments_link( "قبل تر" ); ?></div>
            <div class="nav-next"><?php next_comments_link( "بعد تر" ); ?></div>
        </nav>
    <?php endif;?>

<?php else : // this is displayed if there are no comments so far ?>
    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->
    <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments"><?php _e('دیدگاهها بسته است.'); ?></p>
    <?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>

    <header class="comments-reply">
        <div id="respond">
            <div id="cancel-comment-reply">
                <small><?php cancel_comment_reply_link() ?></small>
            </div>
            <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
                <p><?php printf(__('برای ارسال دیدگاه شما باید  <a href="%s">وارد سایت </a> شوید.'), wp_login_url( get_permalink() )); ?></p>
            <?php else :
                comment_form();
             endif; // If registration required and not logged in ?>
        </div>

    </header>

    <br><br>

    <div id="comments" class="comments-area">
        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 60,
                'date'=>false,
                'reply_text' => 'پاسخ',
            ) );
            ?>
        </ol>
    </div>
<?php endif; // if you delete this the sky will fall on your head ?>
