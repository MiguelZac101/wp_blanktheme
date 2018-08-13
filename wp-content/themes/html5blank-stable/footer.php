</div>
<!-- /wrapper -->
<!-- footer -->
<footer class="footer" role="contentinfo">

    <div class="widgets wrapper clear">
        <div class="grid1-4">
            <h3>Sobre Nosotros</h3>
            <?php 
            $nosotros = new WP_Query('page_id=9');
            while($nosotros->have_posts()):$nosotros->the_post();
                html5wp_excerpt('html5wp_custom_post');
            endwhile;wp_reset_postdata();
            ?>
        </div>
        <div class="grid1-4">
            <h3>Proximos Viajes</h3>
        </div>
        <div class="grid1-4">
            <h3>Últimos Consejos</h3>
        </div>
        <div class="grid1-4">

        </div>
    </div>
    
    <div class="clear"></div>

    <!-- copyright -->
    <p class="copyright">
        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
        <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
    </p>
    <!-- /copyright -->

</footer>
<!-- /footer -->



<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function (f, i, r, e, s, h, l) {
        i['GoogleAnalyticsObject'] = s;
        f[s] = f[s] || function () {
            (f[s].q = f[s].q || []).push(arguments)
        }, f[s].l = 1 * new Date();
        h = i.createElement(r),
                l = i.getElementsByTagName(r)[0];
        h.async = 1;
        h.src = e;
        l.parentNode.insertBefore(h, l)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d94d3f85e625ad2"></script>


</body>
</html>
