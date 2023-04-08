<?php

class Exp_ended_posts_category_3 extends WP_Widget
{
    function __construct()
    {
        parent::__construct('Exp_ended_posts_category_3', 'نمایش تصویر تبلیغات', array('description' => ' تصاویر اضافی'));
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>



        <div class="ads-img">
            <div class="ads-img-photo">
                <a href="<?php echo $instance['site-link']; ?>"><img src="<?php echo $instance['link']; ?>" alt=""></a>
            </div>
        </div>





        <?php

        echo $args['after_widget'];
    }
    function form($instance)
    {
        $post_types = get_post_types(array('public' => true), 'object');
        $taxonomy = $instance['taxonomy'];
        $terms_tax = $instance['terms_tax_3'];
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('link'); ?>">لینک تصویر:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>"
                   name="<?php echo $this->get_field_name('link'); ?>" type="text"
                   value="<?php echo $instance{'link'} ?>">
        </p>


        <p>
            <label for="<?php echo $this->get_field_id('site-link'); ?>">لینک سایت:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('site-link'); ?>"
                   name="<?php echo $this->get_field_name('site-link'); ?>" type="text"
                   value="<?php echo $instance{'site-link'} ?>">
        </p>


        <?php
        $object_tax = get_object_taxonomies('post', 'names');
        echo '<input type="hidden" value="' . $object_tax[0] . '" name="' . $this->get_field_name('taxonomy') . '">';

        ?>

        <p>


            <br/>
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
        $instance['site-link'] = (!empty($new_instance['site-link'])) ? $new_instance['site-link'] : '';
        $instance['link'] = (!empty($new_instance['link'])) ? $new_instance['link'] : '';
        return $instance;
    }
}
function myplugin_register_widgets_ended_posts_category_3()
{
    register_widget('Exp_ended_posts_category_3');
}

add_action('widgets_init', 'myplugin_register_widgets_ended_posts_category_3');