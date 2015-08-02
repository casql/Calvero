<?php
/**
 * The Template for displaying all single posts.
 *
 * @package calvero 
 * @since calvero 1.0
 */
 
get_header(); ?>
 
        <div id="primary" class="content-area main-wrapper">
            <div id="content" class="site-content" role="main">
 
            <?php while ( have_posts() ) : the_post(); ?>
 
                <?php get_template_part( 'content', 'single' ); ?>
 
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
//                    if ( comments_open() || '0' != get_comments_number() )
//                        comments_template( '', true );
                    echo '<section class="comentarios fundo-branco"><div class="col-md-8 col-sm-10 col-xs-10 limpa-float centralizado">';
                    echo do_shortcode('[fbcomments]');
                    echo '</div></section>';
                ?>
                
                <?php calvero_content_nav( 'nav-below' ); ?>
 
            <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
 
<?php get_footer(); ?>