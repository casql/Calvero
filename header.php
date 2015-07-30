<?php
/**
 * O cabeçalho do tema.
 *
 * Mostra todos os elementos do inicio do html até o inicio da div #main,
 * o que significa, especialmente, a div do logo e a barra de nav.
 *
 * @package Calvero
 * @since Calvero 1.0
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        
        <!-- Titulo -->
        <title><?php
        /*
        * Imprime a tag <title> condicionalmente.
        */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Adiciona o nome do blog
        bloginfo( 'name' );

        // Adiciona a descrição do blog para página frontal/home.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

        // Adiciona um número de página, se necessário:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'calvero' ), max( $paged, $page ) );

        ?></title>
        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header main-header" role="banner">
                <a href="<?php echo home_url( '/' ); ?>" ><div class="calvero-logo fundo-preto">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Calvero">
                </div></a> <!-- #calvero-logo -->
                <hgroup>
                    <!--<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                     <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
                </hgroup>
                
                <nav class="nav-container">
                    <div class="btn-nav-container fundo-preto">
                        <div class="btn-nav">
                        </div>
                    </div>
                    
                    <div class="calvero-menu fundo-preto texto-branco">
                        <div class="menu-header">Menu</div>
                        <section class="menu-categorias"><ul>
                            <li><a href="<?php echo home_url( '/' ) ?>">Home</a></li>
                            <?php echo wp_list_categories( 'title_li=' ); ?></ul></section>
                        <section class="menu-pesquisa">
                            <?php get_template_part('searchform'); ?>
                        </section>
                        <section class="menu-paginas"><ul><?php echo wp_list_pages( 'title_li='); ?></section>
                    </div>
                    
                </nav> <!-- nav -->
            </header> <!-- #masthead .site-header -->
            
            <div id="main" class="site-main conteudo-to-push">