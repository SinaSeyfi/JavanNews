<?php

class Exp_sidebar_category extends WP_Widget
{
    function __construct()
    {
        parent::__construct('Exp_sidebar_category', 'سایدبار جوان (1)', array('description' => 'نمایش پست ها در دسته بندی دلخواه'));
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>



        <div class="simple-sidebar">
            <div class="sidebar-title">
                                        <span>
                                            <?php echo $instance['name']; ?>
                                        </span>
            </div>
            <div class="sidebar-list">
                <?php
                if(have_posts()):
                    $query = new WP_Query(array(
                            'cat' => $instance['cat'],
                            'posts_per_page' => $instance['count1'],
                    ));
                    while ($query->have_posts()){
                        $query->the_post();

                        ?>
                        <span>
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        </span>

                        <?php
                    }
                endif;
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
        $terms_tax = $instance['cat'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('name'); ?>">نام سایدبار:</label>
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

            <label for="<?php echo $this->get_field_id('cat'); ?>">دسته سایدبار:</label>
            <select class="widefat" id="<?php echo $this->get_field_id('cat'); ?>"
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
function widgets_category_sidebar()
{
    register_widget('Exp_sidebar_category');
}

add_action('widgets_init', 'widgets_category_sidebar');