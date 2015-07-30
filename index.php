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
        
        <?php // Loop Primário ?>
        <?php 
            $primario = new WP_Query( 'posts_per_page=1' );

            if ( $primario -> have_posts() ) {
                while ( $primario -> have_posts() ){
                    $primario -> the_post();
                    get_template_part( 'content' , 'primario' );
                } // php while   
            } else {
                echo "Por hoje é só, pessoal!";
            }
            wp_reset_postdata();
        ?> <?php // $secundarios ?>
        
        
        
        <?php // nova query para os posts secundarios ?>
        <?php 
            $secundarios = new WP_Query( 'offset=1' );

            if ( $secundarios -> have_posts() ) {
                while ( $secundarios -> have_posts() ){
                    $secundarios -> the_post();
                    get_template_part( 'content' , 'secundario' );
                } // php while   
            } else {
                echo "Por hoje é só, pessoal!";
            }
            wp_reset_postdata();
        ?> <?php // $secundarios ?>
        
    </div> <!-- #content .site-content -->
</div>  <!-- #primary .content-area -->          

<?php
//Puxamos, então, todo o conteúdo do footer com
get_footer(); ?>