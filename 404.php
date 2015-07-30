<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package calvero
 * @since calvero 1.0
 */
 
get_header(); ?>
 
    <div id="primary" class="content-area main-wrapper">
        <div id="content" class="site-content" role="main">
            <section> <!-- bloco informativo 404 -->
                <div class="row " style="text-align:center; height:100vh; background-image:url(<?php echo get_template_directory_uri(); ?>/images/sample-riviera.png); padding-top:35vh;">
                    <div class="info-404 col-md-8 col-sm-10 fundo-preto texto-branco limpa-float centralizado">
                        <h1>Bem-vindo à Riviera.<br>Seu quarto é o 404.</h1>
                        <p>Parece que a página que você estava procurando não existe, mas sinta-se à vontade, se quiser ficar. Para sair, uma pesquisa pode ajudar a encontrar o que quer.</p>
                        <?php get_search_form( 'true' ); ?>
                    </div>
                </div>
            </section> <!-- bloco informativo 404 -->
        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
 
<?php get_footer(); ?>