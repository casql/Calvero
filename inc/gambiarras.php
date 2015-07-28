<?php
/**
 * Funções customizadas que atuam independentemente das template tags
 *
 * Daqui a algum tempo, é possível que as funcionalidades
 * aqui descritas sejam substituidas por funcionalidades natas
 *
 * @package calvero 
 * @since calvero 1.0
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @since calvero 1.0
 */
function calvero_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'calvero_page_menu_args' );
 
/**
 * Adds custom classes to the array of body classes.
 *
 * @since calvero 1.0
 */
function calvero_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
 
    return $classes;
}
add_filter( 'body_class', 'calvero_body_classes' );
 
/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 *
 * @since calvero 1.0
 */
function calvero_enhanced_image_navigation( $url, $id ) {
    if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
        return $url;
 
    $image = get_post( $id );
    if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
        $url .= '#main';
 
    return $url;
}
add_filter( 'attachment_link', 'calvero_enhanced_image_navigation', 10, 2 );

// Variável que retorna a URL da imagem destaque
function thumb_uri() {
    $thumburl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    echo $thumburl;
}

// Query personalizada para página inicial