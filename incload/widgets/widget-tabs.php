<?php

class Exp_ended_posts_category_single extends WP_Widget
{
    function __construct()
    {
        parent::__construct('Exp_ended_posts_category_single', 'سایدبار دو صفحه ای', array('description' => 'نمایش پست ها در دسته بندی دلخواه'));
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        $rand_1 = uniqid();
        $rand_2 = uniqid();

        ?>


<div class="sidebar-right">
        <div class="title">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $rand_1 ?>" type="button" role="tab" aria-controls="pills-<?php echo $rand_1 ?>"" aria-selected="true"><?php echo $instance['name']; ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $rand_2 ?>" type="button" role="tab" aria-controls="pills-<?php echo $rand_2 ?>" aria-selected="false"><?php echo $instance['name_2']; ?></button>
                </li>
            </ul>
        </div>
        <div class="list">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-<?php echo $rand_1 ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul>
                        <?php
                        if(have_posts()):
                            $query = new WP_Query(array(
                                    'cat' => $instance['cat'],
                                'posts_per_page' => $instance['count1'],
                            ));
                            while ($query->have_posts()){
                                $query->the_post();

                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                    <div class="icon-comment">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9H7V7H17V9Z" fill="currentColor" /><path d="M7 13H17V11H7V13Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z" fill="currentColor" /></svg>
                                        <span>
                                            <?php
                                            echo get_comments_number();
                                            ?>
                                        </span>
                                        <span class="line"></span>
                                    </div>
                                </li>
                                <?php
                            }
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-<?php echo $rand_2 ?>" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul>
                        <?php
                        if(have_posts()):
                            $query = new WP_Query(array(
                                'cat' => $instance['cat_2'],
                                'posts_per_page' => $instance['count1'],
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
                </div>
            </div>
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
            <label for="<?php echo $this->get_field_id('name'); ?>">نام تب اول:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>"
                   name="<?php echo $this->get_field_name('name'); ?>" type="text"
                   value="<?php echo $instance{'name'} ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('name_2'); ?>">نام تب دوم:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('name_2'); ?>"
                   name="<?php echo $this->get_field_name('name_2'); ?>" type="text"
                   value="<?php echo $instance{'name_2'} ?>">
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
            <br/>
            <label for="<?php echo $this->get_field_id('cat_2'); ?>">دسته نب دوم:</label>
            <select class="widefat" id="<?php echo $this->get_field_id('cat_2'); ?>"
                    name="<?php echo $this->get_field_name('cat_2'); ?>"><br/>
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
                            value="<?php echo $term->term_id; ?>" <?php if (($instance['cat_2'] ==  $term->term_id)) echo 'selected'; ?>>
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
        $instance['name_2'] = (!empty($new_instance['name_2'])) ? $new_instance['name_2'] : '';
        $instance['count1'] = (!empty($new_instance['count1'])) ? $new_instance['count1'] : '15';
        $instance['cat'] = (!empty($new_instance['cat'])) ? $new_instance['cat'] : '';
        $instance['cat_2'] = (!empty($new_instance['cat_2'])) ? $new_instance['cat_2'] : '';
        $instance['taxonomy'] = (!empty($new_instance['taxonomy'])) ? $new_instance['taxonomy'] : '';
        return $instance;
    }
}
function myplugin_register_widgets_ended_posts_category()
{
    register_widget('Exp_ended_posts_category_single');
}

add_action('widgets_init', 'myplugin_register_widgets_ended_posts_category');