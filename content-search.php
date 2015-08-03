<article class="bloco fundo-branco">
    <p class="categoria texto-preto serif"><?php the_category( ', ' , 'texto-amarelo' ); ?></p>
        <a href="<?php echo the_permalink(); ?>"><h1 class="titulo texto-preto"><?php echo get_the_title(); ?></h1>
        <p class="autor serif"><?php the_author_posts_link(); ?></p>
</article>