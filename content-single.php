<?php
/**
 * @package calvero
 * @since calvero 1.0
 */
?>
<section class="single">
    <div class="imagem-destaque" style="background-image:url(<?php thumb_uri(); ?>)"></div>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'artigo col-md-8 col-sm-10 col-xs-10 limpa-float centralizado' ) ?> >
        <header class="artigo-meta">
            <p><?php the_category( ', ' ) ?></p>
            <h1><?php the_title(); ?></h1>
            <p class="autor"><?php the_author(); ?></p>
        </header>
        <section class="single-conteudo">
            <?php the_content(); ?>
        </section>
        <footer class="single-footer">
            
        </footer>
    </article>
</section> <?php // Single ?>