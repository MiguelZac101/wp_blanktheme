<?php get_header(); ?>

</div>

	<section class="slider">

		<?php $args = array(
			'post_type'  => 'slider',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => -1
		); ?>

		<?php $slider = new WP_Query($args); ?>
		<ul class="slider">
		<?php while($slider->have_posts()): $slider->the_post(); ?>

		<li>
			<a href="<?php the_field(enlace); ?>">
				<?php the_post_thumbnail('slider'); ?>
			</a>
		</li>


		<?php endwhile; wp_reset_postdata(); ?>

		</ul>

	</section>

	<div class="wrapper">

	<section class="tours clear">

			<h1><span>Próximos Tours</span></h1>

			<?php $args = array(
				'post_type' => 'tours',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'orderby' => 'date',

			); ?>

				<?php $tours = new WP_Query($args); ?>
				<?php while($tours->have_posts() ): $tours->the_post(); ?>

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
					

					<?php endwhile; wp_reset_postdata(); ?>
			
	</section> <!--.tours -->



<?php get_footer(); ?>
