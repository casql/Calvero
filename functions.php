<?php
/**
 * Funções e definições do tema Calvero
 *
 * @package Calvero
 * @since Calvero 1.0
 */

/**
 * Função que determina o tamanho da div #content
 * caso ela não seja determinada por algum outro meio
 *
 * @since Calvero 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'calvero_setup' ) ):
/**
 * Esta função configura os padrões do tema.
 *
 * Note que esta função é atrelada ao hook after_setup_theme, 
 * que roda antes do hook init 
 * O hook init é demasiado tarde para carregar alguns suportes, 
 * como a indicação de suporte do tema a imagens destaque (thumbnails).
 *
 * @since Calvero 1.0
 */
function calvero_setup() {
 
    /**
     * Template tags do tema.
     */
    require( get_template_directory() . '/inc/template-tags.php' );
 
    /**
     * Funções customizadas que rodam independentemente das template tags
     */
    require( get_template_directory() . '/inc/gambiarras.php' );
 
    /**
     * Permitir tradução do tema
     * Traduções podem ser preenchidas no diretório /languages/
     * If you're building a theme based on Calvero, use a find and replace
     * to change 'Calvero' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'calvero', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'calvero' ),
    ) );
}
endif; // calvero_setup
add_action( 'after_setup_theme', 'calvero_setup' );

/**
 * Enqueue scripts and styles
 */
function calvero_scripts() {
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
 
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
 
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
    
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js' , false , false , true );
    
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu-funcao.js' , 'jquery' , false , true );
}
add_action( 'wp_enqueue_scripts', 'calvero_scripts' );


if ( ! function_exists( 'calvero_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since calvero 1.0
 */
function calvero_content_nav( $nav_id ) {
    global $wp_query, $post;
 
    // Don't print empty markup on single pages if there's nowhere to navigate.
    if ( is_single() ) {
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );
 
        if ( ! $next && ! $previous )
            return;
    }
 
    // Don't print empty markup in archives if there's only one page.
    if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
        return;
 
    $nav_class = 'site-navigation paging-navigation';
    if ( is_single() )
        $nav_class = 'site-navigation post-navigation';
 
    ?>
    <nav role="navigation" id="<?php echo $nav_id; ?>" class="<?php echo $nav_class; ?>">
        <h1 class="assistive-text"><?php _e( 'Post navigation', 'calvero' ); ?></h1>
 
    <?php if ( is_single() ) : // navigation links for single posts ?>
 
        <?php previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'calvero' ) . '</span> %title' ); ?>
        <?php next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'calvero' ) . '</span>' ); ?>
 
    <?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
 
        <?php if ( get_next_posts_link() ) : ?>
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'calvero' ) ); ?></div>
        <?php endif; ?>
 
        <?php if ( get_previous_posts_link() ) : ?>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'calvero' ) ); ?></div>
        <?php endif; ?>
 
    <?php endif; ?>
 
    </nav><!-- #<?php echo $nav_id; ?> -->
    <?php
}
endif; // calvero_content_nav

if ( ! function_exists( 'calvero_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since calvero 1.0
 */
function calvero_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'calvero' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'calvero' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
            <footer>
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment, 40 ); ?>
                    <?php printf( __( '%s <span class="says">says:</span>', 'calvero' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                </div><!-- .comment-author .vcard -->
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em><?php _e( 'Your comment is awaiting moderation.', 'calvero' ); ?></em>
                    <br />
                <?php endif; ?>
 
                <div class="comment-meta commentmetadata">
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
                    <?php
                        /* translators: 1: date, 2: time */
                        printf( __( '%1$s at %2$s', 'calvero' ), get_comment_date(), get_comment_time() ); ?>
                    </time></a>
                    <?php edit_comment_link( __( '(Edit)', 'calvero' ), ' ' );
                    ?>
                </div><!-- .comment-meta .commentmetadata -->
            </footer>
 
            <div class="comment-content"><?php comment_text(); ?></div>
 
            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div><!-- .reply -->
        </article><!-- #comment-## -->
 
    <?php
            break;
    endswitch;
}
endif; // ends check for calvero_comment()

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Shape 1.0
 */
function shape_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'shape' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'shape' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'shape_widgets_init' );

// Função que adiciona suporte a imagens de destaque
add_theme_support( 'post-thumbnails' ); 