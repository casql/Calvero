<?php
/**
 * @package calvero
 * @since calvero 1.0
 */
?>
<section class="artigo-page">
    <div class="imagem-destaque em-page" style="background-image:url(<?php thumb_uri(); ?>)"></div>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-8 col-sm-10 col-xs-10 limpa-float centralizado' ) ?> >
        <header class="artigo-meta">
            
            <h1 class="titulo-single" ><?php the_title(); ?></h1>

        </header>
        <section class="artigo-conteudo">
            <?php the_content(); ?>
        </section>
        <footer class="pagina-footer">
            
        </footer>
    </article>
</section> <?php // Single ?>