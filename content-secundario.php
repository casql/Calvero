<article id="post-<?php the_ID(); ?>" <?php post_class( 'row fundo-cinza'); ?> style="background-image: url(<?php thumb_uri(); ?>); height:500px">
    <!-- bloco com título do conteúdo -->
    <div class="bloco bloco-secundario fundo-branco">
        <p class="categoria texto-amarelo serif"><?php the_category( 'calvero' , 'texto-amarelo' ); ?></p>
        <a href="<?php echo the_permalink(); ?>"><h1 class="titulo texto-branco"><?php echo get_the_title(); ?></h1>
        <p class="autor texto-amarelo serif"><?php echo get_the_author(); ?></p></a>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->