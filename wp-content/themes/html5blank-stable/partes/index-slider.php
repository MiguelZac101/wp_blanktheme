    <?php
    $args = array(
        'post_type' => 'slider',
        'orderby'   => 'menu_order',
        'order' => 'DESC',
        'posts_per_page' => -1
    );
    ?>

<?php $slider = new WP_Query($args); ?>
    <ul class="slider">
                <?php while ($slider->have_posts()): $slider->the_post(); ?>

            <li>
                <a href="<?php the_field(enlace); ?>">
    <?php the_post_thumbnail('slider'); ?>
                </a>
            </li>


<?php endwhile;
wp_reset_postdata(); ?>

    </ul>