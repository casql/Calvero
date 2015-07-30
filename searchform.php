<?php
/**
 * The template for displaying search forms in calvero
 *
 * @package calvero
 * @since calvero 1.0
 */
?>
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label for="s" class="assistive-text"><?php _e( 'Search', 'calvero' ); ?></label>
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Pesquisar &hellip;', 'calvero' ); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_attr_e( 'Pesquisar &hellip;', 'calvero' ); ?>'" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'calvero' ); ?>" />
    </form>