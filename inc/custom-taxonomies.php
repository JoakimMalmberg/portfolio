<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Branches.
	 */

	$labels = array(
		"name" => __( "Branches", "understrap" ),
		"singular_name" => __( "Branch", "understrap" ),
	);

	$args = array(
		"label" => __( "Branches", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'branch', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "branch",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "branch", array( "portfolio" ), $args );

	/**
	 * Taxonomy: Used Languages.
	 */

	$labels = array(
		"name" => __( "Used Languages", "understrap" ),
		"singular_name" => __( "Used Language", "understrap" ),
	);

	$args = array(
		"label" => __( "Used Languages", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'used', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "used",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "used", array( "portfolio" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
