<div class="grid2-3">
            <h2 class="titulo"><span>Consejos para viajar</span></h2>
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 2,
            );
            ?>
<?php $entradas = new WP_Query($args); ?>
<?php while ($entradas->have_posts()): $entradas->the_post(); ?>
                <div class="entrada clear">

                    <div class="grid1-3">

                        <?php the_post_thumbnail('entradasIndex'); ?>

                    </div>

                    <div class="grid2-3">

                        <h3><?php the_title(); ?></h3>

                <?php html5wp_excerpt('html5wp_custom_post'); ?>

                        <a href="<?php the_permalink(); ?>" class="naranja">Continuar leyendo</a>

                    </div>

                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>

        </div>