<?php get_header(); ?>
</div>
<?php

$args = array(
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date'
);
?>
<?php $slider = new WP_Query($args); ?>
<ul class="slider">
    

<?php while ($slider->have_posts()): $slider->the_post(); ?>
    <li>
        <a href="<?php the_field('url'); ?>">
            <?php the_post_thumbnail('slider'); ?>
        </a>
    </li>
<?php
endwhile;
wp_reset_postdata();
?>      
    </ul>
<div class="wrapper">
<?php get_footer(); ?>