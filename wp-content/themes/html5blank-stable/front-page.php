<?php get_header(); ?>

</div>

<section class="slider">
    <?php get_template_part('partes/index','slider'); ?>
</section>

<div class="wrapper">
    <?php get_template_part('searchform'); ?>
    <section class="tours clear">
        <?php get_template_part('partes/index','tours'); ?>
    </section> <!--.tours -->

    <section class="consejos-testimoniales clear">
        <?php get_template_part('partes/index','consejos'); ?>
        <?php get_template_part('partes/index','testimoniales'); ?>        
    </section>

<?php get_footer(); ?>
