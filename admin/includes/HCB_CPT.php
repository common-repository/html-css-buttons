<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
register_post_type( 'hcb_buttons',array('labels' => array(
	'name' => __('Html Css Button','hcb_button'),
	'add_new' => __('Add New Button', 'hcb_button'),
	'add_new_item' => __('Add New Button','hcb_button'),
	'edit_item' => __('Add New Button','hcb_button'),
	'new_item' => __('New Link','hcb_button'),
	'all_items' => __('All Buttons','hcb_button'),
	'view_item' => __('View Link','hcb_button'),
	'search_items' => __('Search Links','hcb_button'),
	'not_found' =>  __('No Links found','hcb_button'),
	'not_found_in_trash' => __('No Links found in Trash','hcb_button')),
'supports' => array('title'),
'hierarchical' => false,
'show_in' => true,
'show_ui' => true,
'show_in_nav_menus' => false,
'show_in_menu' => true,
'publicly_queryable' => true,
'exclude_from_search' => true,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' =>true,
'menu_position' => 67,		
'public' => true,
'capability_type' => 'post',
'menu_icon' =>null));

add_filter( 'manage_edit-hcb_button_columns', array(&$this, 'hcb_button_columns' )) ;
add_action( 'manage_hcb_button_manage_columns', array(&$this, 'hcb_button_manage_columns' ), 10, 2 );

?>