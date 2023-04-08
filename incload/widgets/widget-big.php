<?php

class Exp_ended_posts_category_2 extends WP_Widget
{
    function __construct()
    {
        parent::__construct('Exp_ended_posts_category_2', 'سایدبار اختصاصی جوان', array('description' => 'نمایش پست ها در دسته بندی دلخواه'));
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>


        <div class="daily-post">
            <div class="deily-post-head">
                <span><?php echo $instance['title-3']; ?></span>
            </div>
            <div class="deily-post-img">
                <?php
                if(have_posts()):
                    $query = new WP_Query(array(
                        'cat' => $instance['terms_tax_3'],
                        'posts_per_page' => 1,
                    ));
                    while ($query->have_posts()){
                        $query->the_post();

                        ?>

                        <a href="<?php the_permalink(); ?>" target="_blank">
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }else{
                                ?>
                                <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                                <?php
                            }
                            ?>
                        </a>

                        <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></span>

                        <div class="icon">

                            <span>

                            </span>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9H7V7H17V9Z" fill="currentColor" /><path d="M7 13H17V11H7V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z" fill="currentColor" /></svg>
                                <?php
                                echo get_comments_number();
                                ?>
                            </span>
                        </div>

                        <?php
                    }
                endif;
                ?>

            </div>
            <div class="deily-post-list">
                <ul>
                    <?php
                    if(have_posts()):
                        $query = new WP_Query(array(
                            'cat' => $instance['terms_tax_3'],
                            'offset' => 1,
                        ));
                        while ($query->have_posts()){
                            $query->the_post();

                            ?>

                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </li>

                            <?php
                        }
                    endif;
                    ?>

                </ul>

                <?php
                if( $instance['terms_tax_3'] != 'none' ){
                    ?>
                    <a target="_blank" href="<?php echo get_category_link($instance['terms_tax_3'][0]); ?>" class="bbttnn">مشاهده بیشتر</a>
                    <?php
                }
                ?>



            </div>
        </div>











        <?php

        echo $args['after_widget'];
    }
    function form($instance)
    {
        $post_types = get_post_types(array('public' => true), 'object');
        $taxonomy = $instance['taxonomy'];
        $terms_tax = $instance['terms_tax'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title-3'); ?>">نام باکس:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title-3'); ?>"
                   name="<?php echo $this->get_field_name('title-3'); ?>" type="text"
                   value="<?php echo $instance{'title-3'} ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('count'); ?>">تعداد نمایش:</label>
            <input class="tiny-text" id="<?php echo $this->get_field_id('count'); ?>"
                   name="<?php echo $this->get_field_name('count'); ?>" type="number" step="1" min="1"
                   value="<?php if (empty($instance['count'])) {
                       echo "15";
                   } else {
                       echo $instance['count'];
                   } ?>" size="3">
        </p>

        <?php
        $object_tax = get_object_taxonomies('post', 'names');
        echo '<input type="hidden" value="' . $object_tax[0] . '" name="' . $this->get_field_name('taxonomy') . '">';
        ?>
        <p>


            <br/>
            <label for="<?php echo $this->get_field_id('terms_tax_3'); ?>">دسته باکس:</label>
            <select class="widefat" id="<?php echo $this->get_field_id('terms_tax_3'); ?>"
                    name="<?php echo $this->get_field_name('terms_tax_3'); ?>"><br/>
                <option value="none" <?php if (($instance['cat'] ==  "none")) echo 'selected'; ?>>نمایش همه پست ها</option>
                <?php
                $terms = get_terms(
                    array(
                        'taxonomy' => $object_tax[0],
                        'hide_empty' => false,
                    )
                );
                $count = count($terms_tax);
                foreach ($terms as $term) {
                    ?>
                    <option class="widefat"
                            value="<?php echo $term->term_id; ?>" <?php if (($instance['terms_tax_3'] ==  $term->term_id)) echo 'selected'; ?>>
                        <?php echo $term->name; ?>
                    </option>
                    <br/>
                    <?php
                }

                ?>
            </select>
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        // Save widget options
        $instance = array();
        $instance['title-3'] = (!empty($new_instance['title-3'])) ? $new_instance['title-3'] : '';
        $instance['count'] = (!empty($new_instance['count'])) ? $new_instance['count'] : '15';
        $instance['style'] = (!empty($new_instance['style'])) ? $new_instance['style'] : '';
        $instance['terms_tax_3'] = (!empty($new_instance['terms_tax_3'])) ? $new_instance['terms_tax_3'] : '';
        $instance['taxonomy'] = (!empty($new_instance['taxonomy'])) ? $new_instance['taxonomy'] : '';
        return $instance;
    }
}
function myplugin_register_widgets_ended_posts_category_2()
{
    register_widget('Exp_ended_posts_category_2');
}

add_action('widgets_init', 'myplugin_register_widgets_ended_posts_category_2');