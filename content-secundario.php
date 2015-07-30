<div class="row fundo-cinza" >
    <!-- bloco com título do conteúdo -->
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bloco bloco-secundario fundo-branco'); ?> >
        <p class="categoria texto-preto serif"><?php the_category( 'calvero' , 'texto-amarelo' ); ?></p>
        <a href="<?php echo the_permalink(); ?>"><h1 class="titulo texto-preto"><?php echo get_the_title(); ?></h1>
        <p class="autor serif"><?php the_author(); ?></p>    
    </article><!-- #post-<?php the_ID(); ?> -->
</div>