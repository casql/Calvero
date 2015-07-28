<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package calvero
* @since calvero 1.0
*/
?>

</div><!-- #main .site-main -->
 
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php do_action( 'calvero_credits' ); ?>
        <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'calvero' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'calvero' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'calvero' ), 'calvero', '<a href="http://themecalveror.com/" rel="designer">Themecalveror</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn-nav-container').click(function(){
            $('.nav-container').toggleClass('appear-from-right');
            $('.calvero-logo').toggleClass('push-to-left');
            $('.main-wrapper').toggleClass('push-to-left');
            $('.btn-nav-container').toggleClass('hide-behind-nav');
            $('.btn-nav').toggleClass('turn-x');
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>