<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package calvero
 * @since calvero 1.0
 */
?>
 
<section class="arquivo-wrapper row fundo-branco">     
<div class="col-md-10 col-sm-10 col-xs-12 limpa-float centralizado">    

<article id="post-0" class="post no-results not-found">  
    <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Ops, desculpe, mas...', 'calvero' ); ?></h1>
    </header><!-- .entry-header -->
 
    <div class="entry-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
 
            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'calvero' ), admin_url( 'post-new.php' ) ); ?></p>
 
        <?php elseif ( is_search() ) : ?>
 
            <p class="serif"><?php _e( 'sua busca não retornou nenhum resultado. Quer tentar novamente?.', 'calvero' ); ?></p>
            <?php get_search_form(); ?>
 
        <?php else : ?>
 
            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'calvero' ); ?></p>
            <?php get_search_form(); ?>
 
        <?php endif; ?>
    </div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->
    
</div>
</section>