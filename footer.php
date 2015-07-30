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
 
<footer id="colophon" class="site-footer row page-footer fundo-preto texto-branco" role="contentinfo">
    <div class="site-info">
        <?php // Orgulhosamente funcionando com Wordpress (http://www.wordpress.org) ?>
        
        <div class="footer-logo col-md-3 col-sm-3 col-xs-12"></div>
        <div class="footer-pages col-md-3 col-sm-3 col-xs-12"
            <ul><?php echo wp_list_pages( 'title_li=' ); ?></ul>
        </div>
        <div class="footer-cats col-md-3 col-sm-3 col-xs-12">
            <ul><?php echo wp_list_categories(); ?></ul>
        </div>
    </div><!-- .site-info -->
    
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn-nav-container').click(function(){
            $('.nav-container').toggleClass('appear-from-right');
            $('.calvero-logo').toggleClass('push-to-left');
            $('.main-wrapper').toggleClass('push-to-left');
            $('.btn-nav-container').toggleClass('throw-inside-nav');
            $('.btn-nav').toggleClass('turn-x');
        });
    });
</script>
</body>
</html>