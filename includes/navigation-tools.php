<?php
/**
 *
 * Navigation Tools
 */

add_filter( 'walker_nav_menu_start_el', 'nav_menu_tools', 10, 2 );
add_filter( 'walker_nav_menu_start_el', 'add_descriptions_to_specified_menus', 10, 4 );
add_filter( 'nav_menu_css_class', 'nav_menu_tool_classes', 10, 2 );

/**
 * Nav Menu Tools
 *
 * @param object $item_output Output.
 * @param array  $item Item.
 * @return object
 */
function nav_menu_tools( $item_output, $item ) {
	if ( '---' === $item->post_title ) {
		// Show Divider.
			return apply_filters(
				'lf_divider',
				'<div class="lf-menu-divider"></div>',
				$item
			);
	} elseif ( '###' === $item->url ) {
		// Show Title (no link).
		return apply_filters(
			'lf_title',
			$item->post_title,
			$item
		);
	} else {
		// Return unmodified output.
		return $item_output;
	}
}

/**
 * Add classes to menu to match the walker.
 *
 * @param array $classes Classes.
 * @param array $item Item.
 * @return array
 */
function nav_menu_tool_classes( $classes, $item ) {

	if ( '###' === $item->url ) {
		$classes[] = 'lf-menu-title';
	}

	return $classes;
}

/**
 * Output description to selected menus menu items.
 *
 * @param array   $item_output Output.
 * @param array   $item Item.
 * @param integer $depth Depth.
 * @param array   $args Arguments.
 * @return array
 */
function add_descriptions_to_specified_menus( $item_output, $item, $depth, $args ) {

	/*$selected_menus = array(
		'about_01',
		'about_02',
		'about_03',
		'solution_01',
		'solution_02',
		'solution_03',
		'resources_01',
		'resources_02',
		'resources_03',
		'community_01',
		'community_02',
		'community_03',
		'blog_01',
		'blog_02',
		'blog_03',
	);*/

	// if menu matches selected, top level and has a description.
	//if ( in_array( $args->theme_location, $selected_menus, true ) && ! $depth && $item->description ) {
		$item_output = str_replace( '</a>', '<span class="lf-menu-description">' . $item->description . '</span></a>', $item_output );
	//}
	return $item_output;

}
