<?php

class Exp_ended_posts_category_tmb extends WP_Widget
{
    function __construct()
    {
        parent::__construct('Exp_ended_posts_category_tmb', 'سایدبار با تصویر شاخص', array('description' => 'آخرین مطالب منتشر شده دسته ها'));
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>


        <div class="sidebar-img">

            <div class="sidebar-img-title">
                <span><?php echo $instance['name']; ?></span>
            </div>

            <?php
            if(have_posts()):
                $query = new WP_Query(array(
                    'cat' => $instance['cat'],
                    'posts_per_page' => $instance['count1'],
                ));
                while ($query->have_posts()){
                    $query->the_post();

                    ?>
                    <div class="item">
                        <div class="img">
                            <a href="<?php the_permalink(); ?>"><?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                }else{
                                    ?>
                                    <img src="<?php uri('assets/img/logo.png'); ?>" alt="">
                                    <?php
                                }
                                ?></a>
                        </div>
                        <div class="cont">
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        </div>
                    </div>


                    <?php
                }
            endif;
            ?>



        </div>



        <?php

        echo $args['after_widget'];
    }
    function form($instance)
    {
        $post_types = get_post_types(array('public' => true), 'object');
        $taxonomy = $instance['taxonomy'];
        $terms_tax = $instance['cat'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('name'); ?>">نام تب اول:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>"
                   name="<?php echo $this->get_field_name('name'); ?>" type="text"
                   value="<?php echo $instance{'name'} ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('count1'); ?>">تعداد نمایش:</label>
            <input class="tiny-text" id="<?php echo $this->get_field_id('count1'); ?>"
                   name="<?php echo $this->get_field_name('count1'); ?>" type="number" step="1" min="1"
                   value="<?php if (empty($instance['count1'])) {
                       echo "15";
                   } else {
                       echo $instance['count1'];
                   } ?>" size="3">
        </p>

        <?php
        $object_tax = get_object_taxonomies('post', 'names');
        echo '<input type="hidden" value="' . $object_tax[0] . '" name="' . $this->get_field_name('taxonomy') . '">';
        ?>
        <p>

            <label for="<?php echo $this->get_field_id('cat'); ?>">دسته نب اول:</label>
            <select id="<?php echo $this->get_field_id('cat'); ?>"
                    name="<?php echo $this->get_field_name('cat'); ?>"><br/>
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
                            value="<?php echo $term->term_id; ?>" <?php if (($instance['cat'] ==  $term->term_id)) echo 'selected'; ?>>
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
        $instance['name'] = (!empty($new_instance['name'])) ? $new_instance['name'] : '';
        $instance['count1'] = (!empty($new_instance['count1'])) ? $new_instance['count1'] : '15';
        $instance['cat'] = (!empty($new_instance['cat'])) ? $new_instance['cat'] : '';
        $instance['taxonomy'] = (!empty($new_instance['taxonomy'])) ? $new_instance['taxonomy'] : '';
        return $instance;
    }
}
function myplugin_register_widgets_ended_posts_category_tmb()
{
    register_widget('Exp_ended_posts_category_tmb');
}

add_action('widgets_init', 'myplugin_register_widgets_ended_posts_category_tmb');