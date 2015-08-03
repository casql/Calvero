<?php
/**
 * @package calvero
 * @since calvero 1.0
 */
?>
<section class="artigo-single">
    <div class="imagem-destaque" style="background-image:url(<?php thumb_uri(); ?>)"></div>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-8 col-sm-10 col-xs-10 limpa-float centralizado' ) ?> >
        <header class="artigo-meta">
            <p class="categoria-single"><?php the_category( ', ' ) ?></p>
            <h1 class="titulo-single" ><?php the_title(); ?></h1>
            <p class="autor-single"><?php echo the_author_posts_link(); ?> // <?php the_date(); ?></p>
        </header>
        <section class="artigo-conteudo">
            <?php the_content(); ?>
        </section>
        <footer class="artigo-footer">
            <div class="autor-single-footer-container">
                <div class="pic"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
                <div class="info">
                    <div class="nome"><?php echo get_the_author( 'name' ); ?></div>
                    <div class="bio"><?php echo get_the_author_meta( 'description' ); ?></div>
                </div>
            </div>
        </footer>
    </article>
</section> <?php // Single ?>