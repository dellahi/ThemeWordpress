<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
function load_themes_assets() {
    /* CSS */
    //wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap-reboot.min.css');
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');

    /* JavaScript */
    wp_enqueue_script('jquery', null, null, null, true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', null, null, true);
    
}

function init() {
    
    $labels = array(
        'name'                  => _x( 'logements', 'Post Type General Name', 'Logement' ),
        'singular_name'         => _x( 'logement', 'Post Type Singular Name', 'Logement' ),
        'menu_name'             => __( 'Logements', 'Logement' ),
        'name_admin_bar'        => __( 'Post Type', 'Logement' ),
        'archives'              => __( 'Item Archives', 'Logement' ),
        'attributes'            => __( 'Item Attributes', 'Logement' ),
        'parent_item_colon'     => __( 'Parent Item:', 'Logement' ),
        'all_items'             => __( 'Toutes les logements', 'Logement' ),
        'add_new_item'          => __( 'Add New Item', 'Logement' ),
        'add_new'               => __( 'Ajouter un logement', 'Logement' ),
        'new_item'              => __( 'Nouveau logement', 'Logement' ),
        'edit_item'             => __( 'Editer logement', 'Logement' ),
        'update_item'           => __( 'Mettre à jour logement', 'Logement' ),
        'view_item'             => __( 'View Item', 'Logement' ),
        'view_items'            => __( 'View Items', 'Logement' ),
        'search_items'          => __( 'Search Item', 'Logement' ),
        'not_found'             => __( 'Not found', 'Logement' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Logement' ),
        'featured_image'        => __( 'Featured Image', 'Logement' ),
        'set_featured_image'    => __( 'Set featured image', 'Logement' ),
        'remove_featured_image' => __( 'Remove featured image', 'Logement' ),
        'use_featured_image'    => __( 'Use as featured image', 'Logement' ),
        'insert_into_item'      => __( 'Insert into item', 'Logement' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'Logement' ),
        'items_list'            => __( 'Items list', 'Logement' ),
        'items_list_navigation' => __( 'Items list navigation', 'Logement' ),
        'filter_items_list'     => __( 'Filter items list', 'Logement' ),
    );
    $args = array(
        'label'                 => __( 'logement', 'Logement' ),
        'description'           => __( 'Des logements', 'Logement' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'logement', $args );

    // ville custom type
    $labels = array(
        'name'                  => _x( 'villes', 'Post Type General Name', 'Villes' ),
        'singular_name'         => _x( 'ville', 'Post Type Singular Name', 'Villes' ),
        'menu_name'             => __( 'Villes', 'Villes' ),
        'name_admin_bar'        => __( 'Post Type', 'Villes' ),
        'archives'              => __( 'Item Archives', 'Villes' ),
        'attributes'            => __( 'Item Attributes', 'Villes' ),
        'parent_item_colon'     => __( 'Parent Item:', 'Villes' ),
        'all_items'             => __( 'Toutes les villes', 'Villes' ),
        'add_new_item'          => __( 'Ajouter une ville', 'Villes' ),
        'add_new'               => __( 'Ajouter une ville', 'Villes' ),
        'new_item'              => __( 'Nouvelle ville', 'Villes' ),
        'edit_item'             => __( 'Editer une ville', 'Villes' ),
        'update_item'           => __( 'Mettre à jour Ville', 'Villes' ),
        'view_item'             => __( 'View Item', 'Villes' ),
        'view_items'            => __( 'View Items', 'Villes' ),
        'search_items'          => __( 'Search Item', 'Villes' ),
        'not_found'             => __( 'Not found', 'Villes' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Villes' ),
        'featured_image'        => __( 'Featured Image', 'Villes' ),
        'set_featured_image'    => __( 'Set featured image', 'Villes' ),
        'remove_featured_image' => __( 'Remove featured image', 'Villes' ),
        'use_featured_image'    => __( 'Use as featured image', 'Villes' ),
        'insert_into_item'      => __( 'Insert into item', 'Villes' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'Villes' ),
        'items_list'            => __( 'Items list', 'Villes' ),
        'items_list_navigation' => __( 'Items list navigation', 'Villes' ),
        'filter_items_list'     => __( 'Filter items list', 'Villes' ),
    );
    $args = array(
        'label'                 => __( 'ville', 'Villes' ),
        'description'           => __( 'Des villes', 'Villes'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor','thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'ville', $args );

    // Register Custom Taxonomy sport

	$labels = array(
		'name'                       => _x( 'Piscines', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Piscine', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
    register_taxonomy( 'piscine', array( 'logement' ), $args );
      // Register Custom Taxonomy Meublé
    $labels = array(
		'name'                       => _x( 'Meublés', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Meublé', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
    register_taxonomy( 'meublé', array( 'logement' ), $args );
      // Register Custom Taxonomy veranda
    $labels = array(
		'name'                       => _x( 'Veranda', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Veranda', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
    register_taxonomy( 'veranda', array( 'logement' ), $args );

     // Register Custom Taxonomy cuisines
    $labels = array(
		'name'                       => _x( 'Cuisines', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Cuisine', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'cuisine', array( 'logement' ), $args );

}
add_action('init', 'init');

/*
* ACF Field générés à partir de wordpress
*/
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5eef6f1f3e02a',
		'title' => 'champs pour ville',
		'fields' => array(
			array(
				'key' => 'field_5eef6f5555595',
				'label' => 'description',
				'name' => 'description',
				'type' => 'text',
				'instructions' => 'Description pour une ville',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5eef6ff71af2a',
				'label' => 'Code postale',
				'name' => 'code_postale',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5eef95d9349b0',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ville',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5eef711b0fcd8',
		'title' => 'Groupe de champs pour logement',
		'fields' => array(
			array(
				'key' => 'field_5eef7192c2843',
				'label' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5eef71bf4e854',
				'label' => 'Surface',
				'name' => 'surface',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5eef71e24176b',
				'label' => 'Prix',
				'name' => 'prix',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5eef71fd92000',
				'label' => 'Frais_agence',
				'name' => 'frais_agence',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5eef722adaa4f',
				'label' => 'Date_mise_en_vente',
				'name' => 'date_mise_en_vente',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_5eef72b911ad0',
				'label' => 'Exposition',
				'name' => 'exposition',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Sud' => 'Sud',
					'Est' => 'Est',
					'Ouest' => 'Ouest',
					'Nord' => 'Nord',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5eef73b54a053',
				'label' => 'Ville',
				'name' => 'ville',
				'type' => 'relationship',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'ville',
				),
				'taxonomy' => '',
				'filters' => array(
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				),
				'elements' => '',
				'min' => '',
				'max' => '',
				'return_format' => 'object',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'logement',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;
/*
* menu des elements
*/
function add_menu() {
    register_nav_menu('header', __('entête de page'));
}
add_action('init', 'add_menu');

// Chargement des assets
add_action('wp_enqueue_scripts','load_themes_assets');

?>