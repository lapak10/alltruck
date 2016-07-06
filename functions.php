<?php
function console_log( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

add_role('transporter', 'Transporter', array(
    'read' => true, // True allows that capability
    'edit_posts' => true,
    'delete_posts' => false, // Use false to explicitly deny
));

add_role('customer', 'Customer', array(
    'read' => true, // True allows that capability
    'edit_posts' => true,
    'delete_posts' => false, // Use false to explicitly deny
));


// Register TRUCK Custom Post Type
function custom_post_type_truck() {

	$labels = array(
		'name'                  => _x( 'Trucks', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Truck', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Truck', 'text_domain' ),
		'name_admin_bar'        => __( 'Truck', 'text_domain' ),
		'archives'              => __( 'Truck Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Truck:', 'text_domain' ),
		'all_items'             => __( 'All Trucks', 'text_domain' ),
		'add_new_item'          => __( 'Add New Truck', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Truck', 'text_domain' ),
		'edit_item'             => __( 'Edit Truck', 'text_domain' ),
		'update_item'           => __( 'Update Truck', 'text_domain' ),
		'view_item'             => __( 'View Truck', 'text_domain' ),
		'search_items'          => __( 'Search Truck', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into trucks', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this truck', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter trucks list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Truck', 'text_domain' ),
		'description'           => __( 'Truck for alltruck.com', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		//'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-generic',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'truck', $args );

}
add_action( 'init', 'custom_post_type_truck', 0 );