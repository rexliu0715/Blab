<?php
/**
 * Custom Administration Functions
 *
 * all custom plugin function
 * trigger / action code in admin-filters.php
 * 
 * @package WordPress
 * @subpackage Administration
 */

/**
 * Retrieve field data and filter it.
 *
 * @since 2.0.5
 *
 * @param int $user_id User ID.
 * @return WP_User|bool WP_User object on success, false on failure.
 */

function remove_my_post_metaboxes() {
	remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
	remove_meta_box( 'revisionsdiv','post','normal' ); // Revisions Metabox
	remove_meta_box( 'slugdiv','post','normal' ); // Slug Metabox
	remove_meta_box( 'trackbacksdiv','post','normal' ); // Trackback Metabox
}

function remove_plugin_metaboxes(){
	remove_meta_box( 'the_grid_item_formats','post','normal' ); // The Grid Metabox
	remove_meta_box( 'the_grid_item_formats','x-portfolio','normal' ); // The Grid Metabox
	remove_meta_box( 'mymetabox_revslider_0','post','normal' ); // Revslider Metabox
	remove_meta_box( 'aiosp','post','advanced' ); // All In One SEO Metabox
	remove_meta_box( 'acf-group_583e66cc93ee2','post','advanced' ); // ACF Feature field Metabox
	remove_meta_box( 'customsidebars-mb','post','side' ); // Sidebar Metabox
}

function remove_admin_menus() {
	remove_menu_page( 'vc-welcome' );
	remove_menu_page( 'soliloquy' );
}

$current_user = wp_get_current_user();

if ($current_user->roles != 'administrator' || $current_user->roles != 'superadmin') {
	// Remove meta box
	add_action( 'admin_menu', 'remove_my_post_metaboxes' );	
	add_action( 'do_meta_boxes', 'remove_plugin_metaboxes' );
	// Remove submenu 
	add_action( 'admin_menu', 'remove_admin_menus', 999 );
}
