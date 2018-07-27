<?php
/*
  Template Name: Blog
 */
?>
<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="clear">

        <h1><span><?php the_title(); ?></span></h1>

        <?php if (have_posts()): ?>

            <?php while (have_posts()):the_post(); ?>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                ?>
                <?php $ultima = new WP_Query($args); ?>
                <?php while ($ultima->have_posts()):$ultima->the_post(); ?>

                    <article class="entrada clear">
                        <div class="foto">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('principalBlog'); ?>
                            </a>                            
                        </div>
                        <div class="grid1-3">

                        </div>
                        <div class="grid2-3">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>    
                            </h2>
                            <?php html5wp_excerpt('html5wp_custom_post'); ?>
                        </div>
                    </article>

                <?php endwhile;
                wp_reset_postdata();
                ?>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1
                );
                ?>
                <?php $consejos = new WP_Query($args); ?>
        <?php while ($consejos->have_posts()):$consejos->the_post(); ?>

                    <article class="entrada clear">

                        <div class="grid1-3">
                            <div class="foto">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('mediano'); ?>
                                </a>                            
                            </div>
                        </div>
                        <div class="grid2-3">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
                                </a>    
                            </h2>
            <?php html5wp_excerpt('html5wp_custom_post'); ?>
                        </div>
                    </article>

                <?php endwhile;
                wp_reset_postdata();
                ?>

            <?php endwhile;
            wp_reset_postdata();
            ?>

<?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

            </article>
            <!-- /article -->

<?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php // get_sidebar();     ?>

<?php get_footer(); ?>
