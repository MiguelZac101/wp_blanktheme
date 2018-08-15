
<h2 class="titulo"><span>Próximos Tours</span></h2>

<?php
$args = array(
    'post_type' => 'tours',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
);
?>

<?php $tours = new WP_Query($args); ?>
<?php while ($tours->have_posts()): $tours->the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('grid1-3'); ?>>

        <div class="imagen-destacada">
            <?php the_post_thumbnail('toursDestacado'); ?>
            <a class="mas-info"  href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
            </a>
        </div> <!--.imagen-destacada-->



        <?php
        $formato = 'd F, Y';
        $fecha = strtotime(get_field('fecha_de_salida'));
        $fechasalida = date_i18n($formato, $fecha);

        $fechaRetorno = strtotime(get_field('fecha_de_retorno'));
        $fechaRetorno = date_i18n($formato, $fechaRetorno);
        ?>

        <div class="fecha-precio clear">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <p class="fecha"><?php echo $fechasalida; ?> - <?php echo $fechaRetorno; ?></p>
        </div>
        <div class="clear"></div>


    </article>
    <!-- /article -->


<?php endwhile;
wp_reset_postdata();
?>