<?php
/*
Plugin Name: My Popular Posts Widget
Plugin URI: 
Description: A very simple popular posts widget which displays posts by comment count (with featured image).
Author: Bobby Gunawan
Author URI: http://www.mywpcorner.com
Version: 1.0.0
*/
class My_Popular_Posts extends WP_Widget
{
    function My_Popular_Posts()
    {
        $settings = array(
            'name' => 'My Popular Posts',
            'description' => 'Display posts with the most page views.'
        );

        $this->WP_Widget('my_popula_posts', '', $settings);
    }

    public function form($instance)
    {
        // set defaults
        $defaults = array( 'title' => 'Popular Posts', 'max' => '5');
        $instance = wp_parse_args( (array) $instance, $defaults );

        // $instance = the <input> values of the <form>
        extract( $instance );

        // Default settings

        ?>
        <!-- Title of widget to display -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input 
                class="widefat"
                id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php echo esc_attr($title); ?>" 
            />
        </p>
        <!-- Max number of posts to display -->
        <p>
            <label for="<?php echo $this->get_field_id('max'); ?>">Max number of posts to display:</label>
            <input 
                id="<?php echo $this->get_field_id('max'); ?>"
                name="<?php echo $this->get_field_name('max'); ?>"
                value="<?php echo $max; ?>"
                type="number" min="1" max="20"
            />
        </p>

        <!-- Display post thumbnail? -->
        <p>
            <label for="<?php echo $this->get_field_id('display_thumb'); ?>">Display post thumbnail:</label>
            <input 
                id="<?php echo $this->get_field_id('display_thumb'); ?>"
                name="<?php echo $this->get_field_name('display_thumb'); ?>"
                value="1" 
                <?php if ( $display_thumb == 1 ) echo 'checked="checked"'; ?>
                type="checkbox"
            />
        </p>


        <?php if ($display_thumb == 1) : ?>
        <!-- Post thumbnail size -->
        <p>
            <label for="<?php echo $this->get_field_id('thumb_width'); ?>">Post thumbnail width:</label>
            <input 
                id="<?php echo $this->get_field_id('thumb_width'); ?>"
                name="<?php echo $this->get_field_name('thumb_width'); ?>"
                value="<?php echo $thumb_width; ?>"
                type="number"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('thumb_height'); ?>">Post thumbnail height:</label>
            <input 
                id="<?php echo $this->get_field_id('thumb_height'); ?>"
                name="<?php echo $this->get_field_name('thumb_height'); ?>"
                value="<?php echo $thumb_height; ?>"
                type="number"
            />
        </p>
        <?php
        endif; // ($display_thumb == 1)
    }

    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        $title  = empty($title) ? ' ' : $title;

        $popularpost = new WP_Query(array(
            'posts_per_page'    => $max,
            'orderby'           => 'comment_count',
            'order'             => 'DESC'
        ) );



        // html output  
        echo $before_widget;
            // title
            if (!empty($title)) echo $before_title . $title . $after_title;

            echo '<ul>';
            // content
            if ($popularpost->have_posts()) : while ($popularpost->have_posts()) : $popularpost->the_post();
            ?>
                <li>
                    <?php
                    if ( $display_thumb == 1 && has_post_thumbnail() ) {
                        if ( !empty($thumb_width) && !empty($thumb_height) ) {
                            add_image_size( 'widget_thumb', $thumb_width, $thumb_height, true );
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'widget_thumb' );?></a>
                            <?php
                        } else {
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            <?php
                        }
                    }
                    ?>

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span><?php echo get_the_date('d M , Y'); ?></span>
                </li>
            <?php
            endwhile; endif; wp_reset_query(); // $popularpost loop
            echo '</ul>';

        echo $after_widget;
    }
}

add_action('widgets_init' , 'my_popular_posts');
function my_popular_posts()
{
    register_widget('My_Popular_Posts');
}
?>