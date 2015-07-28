<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package calvero
 * @since calvero 1.0
 */

// Puxamos todo o conteúdo do header com
get_header(); ?>

<div id="primary" class="content-area main-wrapper">
    <div id="content" class="site-content" role="main">

<?php if ( have_posts() ) : ?>

	<!-- pagination here -->
        
    
	<!-- the loop -->
	<?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /* Include the Post-Format-specific template for the content.
                    * If you want to overload this in a child theme then include a file
                    * called content-___.php (where ___ is the Post Format name) and    that will be used instead.
                    */
                    get_template_part( 'content', 'primario' );
                    ?>
                <?php endwhile; ?>
                <?php calvero_content_nav();?>
                <?php wp_reset_postdata(); // reset the query ?>
        <?php else : ?>
            <?php get_template_part( 'no-results', 'index' ); ?>
        <?php endif; ?>
        
        
    </div> <!-- #content .site-content -->
</div>  <!-- #primary .content-area -->          

<?php
//Puxamos, então, todo o conteúdo do footer com
get_footer(); ?>