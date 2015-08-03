<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package calvero
 * @since calvero 1.0
 */
 
get_header(); ?>
 
        <section id="primary" class="content-area main-wrapper">
            <div id="content" class="site-content" role="main">
                
                 
 
            <?php if ( have_posts() ) : ?>
                <section class="busca-wrapper row fundo-branco">     
                <div class="col-md-10 col-sm-10 col-xs-12 limpa-float centralizado"> 
 
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Resultados para: %s', 'calvero' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
 
                <?php calvero_content_nav( 'nav-above' ); ?>
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'search' ); ?>
 
                <?php endwhile; ?>
 
                <?php calvero_content_nav( 'nav-below' ); ?>
 
            <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
                </div>
                </section>
            <?php endif; ?>
                    
                    
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
 
<?php get_footer(); ?>