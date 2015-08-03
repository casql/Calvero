    <!-- bloco com título do conteúdo -->
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bloco bloco-secundario fundo-branco col-md-4 col-sm-6 col-xs-12'); ?> >
        <p class="categoria texto-preto serif"><?php the_category( ', ' , 'texto-amarelo' ); ?></p>
        <a href="<?php echo the_permalink(); ?>"><h1 class="titulo texto-preto"><?php echo get_the_title(); ?></h1>
        <p class="autor serif"><?php echo the_author_posts_link();?></p>    
    </article><!-- #post-<?php the_ID(); ?> -->