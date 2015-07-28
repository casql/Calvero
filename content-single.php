<?php
/**
 * @package calvero
 * @since calvero 1.0
 */
?>
<section class="artigo-single-wrapper content content-fluid">
    <article id="<?php the_ID(); ?>" <?php post_class( 'artigo-single col-md-10 col-sm-10 limpa-float centralizado' ); ?> >
        <div class="header-single">
            <div class="imagem-destaque row" style="background-image:url(<?php thumb_uri()?>)">
                <?php calvero_posted_on(); ?>
            </div>
            <?php the_title(); ?>
        </div>

        <?php the_content(); ?>
        
        <footer>
        </footer><!-- .entry-meta -->
    </article>
</article><!-- #post-<?php the_ID(); ?> -->