<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              wp_puple_bug
 * @since             1.0.0
 * @package           Purple
 *
 * @wordpress-plugin
 * Plugin Name:       Purple Bug Admin Template
 * Plugin URI:        wp_puple_bug
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            John Ricardo Porras
 * Author URI:        wp_puple_bug
 * License:           GPL-2.0+
 * Text Domain:       purple
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PURPLE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-purple-activator.php
 */
function activate_purple() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-purple-activator.php';
	Purple_Activator::activate();

	
}

function pluginprefix_activate(){
	//$unserialize = unserialize('a:7:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:73:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:12:"create_posts";b:1;s:17:"install_languages";b:1;s:14:"resume_plugins";b:1;s:13:"resume_themes";b:1;s:23:"view_site_health_checks";b:1;s:14:"ure_edit_roles";b:1;s:16:"ure_create_roles";b:1;s:16:"ure_delete_roles";b:1;s:23:"ure_create_capabilities";b:1;s:23:"ure_delete_capabilities";b:1;s:18:"ure_manage_options";b:1;s:15:"ure_reset_roles";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:12:"client-admin";a:2:{s:4:"name";s:12:"Client Admin";s:12:"capabilities";a:46:{s:12:"create_posts";b:1;s:12:"create_users";b:1;s:19:"delete_others_posts";b:1;s:12:"delete_posts";b:1;s:20:"delete_private_posts";b:1;s:22:"delete_published_posts";b:1;s:12:"delete_users";b:1;s:14:"edit_dashboard";b:1;s:10:"edit_files";b:1;s:17:"edit_others_posts";b:1;s:10:"edit_posts";b:1;s:18:"edit_private_posts";b:1;s:20:"edit_published_posts";b:1;s:10:"edit_users";b:1;s:6:"export";b:1;s:6:"import";b:1;s:7:"level_0";b:1;s:7:"level_1";b:1;s:8:"level_10";b:1;s:7:"level_2";b:1;s:7:"level_3";b:1;s:7:"level_4";b:1;s:7:"level_5";b:1;s:7:"level_6";b:1;s:7:"level_7";b:1;s:7:"level_8";b:1;s:7:"level_9";b:1;s:10:"list_users";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:13:"promote_users";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:18:"read_private_posts";b:1;s:12:"remove_users";b:1;s:15:"unfiltered_html";b:1;s:17:"unfiltered_upload";b:1;s:12:"upload_files";b:1;s:23:"ure_create_capabilities";b:1;s:16:"ure_create_roles";b:1;s:23:"ure_delete_capabilities";b:1;s:16:"ure_delete_roles";b:1;s:14:"ure_edit_roles";b:1;s:18:"ure_manage_options";b:1;}}s:9:"marketing";a:2:{s:4:"name";s:9:"Marketing";s:12:"capabilities";a:34:{s:19:"delete_others_pages";b:1;s:19:"delete_others_posts";b:1;s:12:"delete_pages";b:1;s:12:"delete_posts";b:1;s:20:"delete_private_pages";b:1;s:20:"delete_private_posts";b:1;s:22:"delete_published_pages";b:1;s:22:"delete_published_posts";b:1;s:17:"edit_others_pages";b:1;s:17:"edit_others_posts";b:1;s:10:"edit_pages";b:1;s:10:"edit_posts";b:1;s:18:"edit_private_pages";b:1;s:18:"edit_private_posts";b:1;s:20:"edit_published_pages";b:1;s:20:"edit_published_posts";b:1;s:7:"level_0";b:1;s:7:"level_1";b:1;s:7:"level_2";b:1;s:7:"level_3";b:1;s:7:"level_4";b:1;s:7:"level_5";b:1;s:7:"level_6";b:1;s:7:"level_7";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:17:"moderate_comments";b:1;s:13:"publish_pages";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:18:"read_private_pages";b:1;s:18:"read_private_posts";b:1;s:15:"unfiltered_html";b:1;s:12:"upload_files";b:1;}}}');
	
	
	$arr = array(       
       
            'administrator' => array(
            'name' => 'Administrator',
            'capabilities' => array(
                    'switch_themes' => 1,
                    'edit_themes' => 1,
                    'activate_plugins' => 1,
                    'edit_plugins' => 1,
                    'edit_users' => 1,
                    'edit_files' => 1,
                    'manage_options' => 1,
                    'moderate_comments' => 1,
                    'manage_categories' => 1,
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'import' => 1,
                    'unfiltered_html' => 1,
                    'edit_posts' => 1,
                    'edit_others_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'edit_pages' => 1,
                    'read' => 1,
                    'level_1,0' => 1,
                    'level_9' => 1,
                    'level_8' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1,' => 1,
                    'level_0' => 1,
                    'edit_others_pages' => 1,
                    'edit_published_pages' => 1,
                    'publish_pages' => 1,
                    'delete_pages' => 1,
                    'delete_others_pages' => 1,
                    'delete_published_pages' => 1,
                    'delete_posts' => 1,
                    'delete_others_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    'delete_private_pages' => 1,
                    'edit_private_pages' => 1,
                    'read_private_pages' => 1,
                    'delete_users' => 1,
                    'create_users' => 1,
                    'unfiltered_upload' => 1,
                    'edit_dashboard' => 1,
                    'update_plugins' => 1,
                    'delete_plugins' => 1,
                    'install_plugins' => 1,
                    'update_themes' => 1,
                    'install_themes' => 1,
                    'update_core' => 1,
                    'list_users' => 1,
                    'remove_users' => 1,
                    'promote_users' => 1,
                    'edit_theme_options' => 1,
                    'delete_themes' => 1,
                    'export' => 1,
                    'create_posts' => 1,
                    'install_languages' => 1,
                    'resume_plugins' => 1,
                    'resume_themes' => 1,
                    'view_site_health_checks' => 1,
                    'ure_edit_roles' => 1,
                    'ure_create_roles' => 1,
                    'ure_delete_roles' => 1,
                    'ure_create_capabilities' => 1,
                    'ure_delete_capabilities' => 1,
                    'ure_manage_options' => 1,
                    'ure_reset_roles' => 1,
                )

              )
       ,
            'IT' => array(
            'name' => 'Super User (IT)',
            'capabilities' => array(
                    'edit_users' => 1,
                    'edit_files' => 1,
                    'manage_options' => 1,
                    'moderate_comments' => 1,
                    'manage_categories' => 1,
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'unfiltered_html' => 1,
                    'edit_posts' => 1,
                    'edit_others_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'edit_pages' => 1,
                    'read' => 1,
                    'level_1,0' => 1,
                    'level_9' => 1,
                    'level_8' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1,' => 1,
                    'level_0' => 1,
                    'edit_others_pages' => 1,
                    'edit_published_pages' => 1,
                    'publish_pages' => 1,
                    'delete_pages' => 1,
                    'delete_others_pages' => 1,
                    'delete_published_pages' => 1,
                    'delete_posts' => 1,
                    'delete_others_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    'delete_private_pages' => 1,
                    'edit_private_pages' => 1,
                    'read_private_pages' => 1,
                    'delete_users' => 1,
                    'create_users' => 1,
                    'unfiltered_upload' => 1,
                    'edit_dashboard' => 1,
                    'list_users' => 1,
                    'remove_users' => 1,
                    'promote_users' => 1,
                    'export' => 1,
                    'create_posts' => 1,
                    'view_site_health_checks' => 1,
                    'ure_edit_roles' => 1,
                    'ure_manage_options' => 1,
                    'ure_reset_roles' => 1,
                )

              )
       ,
           'editor' => array(
                'name' => 'Editor',
                'capabilities' => array
                    (
                        
              
                    'manage_options' => 1,
                    'moderate_comments' => 1,
                    'manage_categories' => 1,
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'unfiltered_html' => 1,
                    'edit_posts' => 1,
                    'edit_others_posts' => 1,
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'edit_published_pages' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    'delete_private_pages' => 1,
                    'edit_private_pages' => 1,
                    'read_private_pages' => 1,
                    'publish_pages' => 1,
                    'edit_others_pages' => 1,
                    'edit_pages' => 1,
                    
                    'read' => 1,
                    'level_1,0' => 1,
                    'level_9' => 1,
                    'level_8' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1,' => 1,
                
                    'delete_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    
                    'unfiltered_upload' => 1,
                    'edit_dashboard' => 1,
                   
                    'create_posts' => 1,
                    'view_site_health_checks' => 1,
                    'ure_manage_options' => 1,
                 
                    )
    
            ) 
       ,
            'author' => array(
                    'name' => 'Author',
                    'capabilities' => array
                        (
                            'manage_options' => 1,
                    'moderate_comments' => 1,
                     
                    'manage_links' => 1,
                    'upload_files' => 1,
                    'unfiltered_html' => 1,
                    'edit_posts' => 1,
                  
                    'edit_published_posts' => 1,
                    'publish_posts' => 1,
                    'edit_published_pages' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    'delete_private_pages' => 1,
                    'edit_private_pages' => 1,
                    'read_private_pages' => 1,
                    'publish_pages' => 1,
                    'edit_others_pages' => 1,
                    'edit_pages' => 1,
                    
                    'read' => 1,
                    'level_1,0' => 1,
                    'level_9' => 1,
                    'level_8' => 1,
                    'level_7' => 1,
                    'level_6' => 1,
                    'level_5' => 1,
                    'level_4' => 1,
                    'level_3' => 1,
                    'level_2' => 1,
                    'level_1,' => 1,
                
                    'delete_posts' => 1,
                    'delete_published_posts' => 1,
                    'delete_private_posts' => 1,
                    'edit_private_posts' => 1,
                    'read_private_posts' => 1,
                    
                    'unfiltered_upload' => 1,
                    'edit_dashboard' => 1,
                   
                    'create_posts' => 1,
                    'view_site_health_checks' => 1,
                    'ure_manage_options' => 1,
                        )
        
                )
        ,
            'client-admin' => array(
                    'name' => 'Client Admin',
                    'capabilities' => array
                        (
                            'create_posts' => 1,
                            'create_users' => 1,
                            'delete_others_posts' => 1,
                            'delete_posts' => 1,
                            'delete_private_posts' => 1,
                            'delete_published_posts' => 1,
                            'delete_users' => 1,
                            'edit_dashboard' => 1,
                            'edit_files' => 1,
                            'edit_others_posts' => 1,
                            'edit_posts' => 1,
                            'edit_private_posts' => 1,
                            'edit_published_posts' => 1,
                            'edit_users' => 1,
                            'export' => 1,
                            'import' => 1,
                            'level_0' => 1,
                            'level_1,' => 1,
                            'level_1,0' => 1,
                            'level_2' => 1,
                            'level_3' => 1,
                            'level_4' => 1,
                            'level_5' => 1,
                            'level_6' => 1,
                            'level_7' => 1,
                            'level_8' => 1,
                            'level_9' => 1,
                            'list_users' => 1,
                            'manage_categories' => 1,
                            'manage_links' => 1,
                            'manage_options' => 1,
                            'moderate_comments' => 1,
                            'promote_users' => 1,
                            'publish_posts' => 1,
                            'read' => 1,
                            'read_private_posts' => 1,
                            'remove_users' => 1,
                            'unfiltered_html' => 1,
                            'unfiltered_upload' => 1,
                            'upload_files' => 1,
                            'ure_create_capabilities' => 1,
                            'ure_create_roles' => 1,
                            'ure_delete_capabilities' => 1,
                            'ure_delete_roles' => 1,
                            'ure_edit_roles' => 1,
                            'ure_manage_options' => 1,
                        )
        
                )
        

        );
	
	update_option('wp_user_roles',$arr);


	update_option('library_content','grid');
}

function create_post_type(){

	
	
}





/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-purple-deactivator.php
 */
function deactivate_purple() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-purple-deactivator.php';
	Purple_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_purple' );
register_deactivation_hook( __FILE__, 'deactivate_purple' );
register_activation_hook( __FILE__, 'pluginprefix_activate' );

register_activation_hook( __FILE__, 'create_post_type' );
 

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-purple.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_purple() {

	$plugin = new Purple();
	$plugin->run();

}
run_purple();



// Register Custom Post Type
function library_post_type() {

	$labels = array(
		'name'                  => _x( 'Article', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Article', 'text_domain' ),
		'name_admin_bar'        => __( 'Article', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Article', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New Article ', 'text_domain' ),
		'new_item'              => __( 'New Article ', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Article', 'text_domain' ),
		'view_item'             => __( 'View Article', 'text_domain' ),
		'view_items'            => __( 'View Article', 'text_domain' ),
		'search_items'          => __( 'Search Article', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Article', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor', 'author', 'thumbnail', 'excerpt','comments'),
		'taxonomies'            => array( 'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'article',
 
		'menu_icon'           => 'dashicons-media-document',
	);
	register_post_type( 'article', $args );

}
add_action( 'init', 'library_post_type', 10 );

if ( ! function_exists('event_task') ) {

// Register Custom Post Type
function event_task() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Event', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'attachment_category','campaign' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'event-task', $args );


	$labels = array(
		'name'                  => _x( 'Workflows', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Workflow', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Workflow', 'text_domain' ),
		'name_admin_bar'        => __( 'Workflow', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New Workflow', 'text_domain' ),
		'new_item'              => __( 'New Item Workflow', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Workflow', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 10,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'workflow', $args );

	
	 

}
add_action( 'init', 'event_task', 0 );

}

 

 

 

// Register Custom Taxonomy
function campaign_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Campaigns', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Campaign', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Campaign', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Campaign:', 'text_domain' ),
		'new_item_name'              => __( 'New Campaign Name', 'text_domain' ),
		'add_new_item'               => __( 'Add Campaign Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Campaign', 'text_domain' ),
		'view_item'                  => __( 'View Campaign', 'text_domain' ),
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
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'campaign', array( 'event-task' ), $args );

}
add_action( 'init', 'campaign_taxonomy', 0 );


// Register Custom Taxonomy
function libary_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Folders', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Folder', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Folder', 'text_domain' ),
		'all_items'                  => __( 'Folders', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New folder', 'text_domain' ),
		'add_new_item'               => __( 'Add folder', 'text_domain' ),
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
	register_taxonomy( 'attachment_category', array( 'attachment' ), $args );

}
add_action( 'init', 'libary_taxonomy', 0 );

function remove_footer_admin () 
{
    echo '<span id="footer-thankyou" ><span style=" padding-right: 10px;">Developed by </span><a href="https://purplebug.net/" target="_blank"><img width="100px" src="'.plugin_dir_url( __FILE__ ).'admin/partials/images/purplebug-logo.svg'.'"></a></span>';

 
}


add_action('admin_head',function(){
	//ec

	global $wp_query;
	if(isset($_GET['post_type']) || isset($_GET['taxonomy'])){
	    if($_GET['post_type']  == 'workflow' || $_GET['taxonomy'] == 'campaign'){
	        ?>
	            <style>
	                span.view {
                        display: none;
                    }
	            </style>
	        <?php 
	    }
	}
	//echo get_post_type($wp_query->post->ID).'Hello Woeld';
    if( 'article' == get_post_type($_GET['post'])) {
		?>
			<style>
				.load-more-wrapper, .attachments-browser .media-toolbar, button#menu-item-browse {
					display:block !important;
				}
				.wp-admin .attachments-wrapper li.attachment {
					display:block !important;
				}
				.wp-admin .attachments-browser .wp-admin .uploader-inline, .wp-admin .attachments-browser.has-load-more .attachments-wrapper, .wp-admin .attachments-browser:not(.has-load-more) .attachments{
					top: 75px !important;
				}
				 
				.media-toolbar {
				     background:transparent !important;
				}
		 		
				tr.compat-field-lib_content_type,
			 	tr.compat-field-attachment_category {
				    display: none;
				}
				.attachments-browser .media-toolbar{
					right: 490px !important;
				}
			</style>

		<?php 
		     
		 
	}
 
    			

		    $wp_capabilities = get_user_meta( get_current_user_id(), 'wp_capabilities', true );
		    $current = array_keys($wp_capabilities);
		     if($current[0]!='administrator'){
		?>	
			<style>
			    
			    li#menu-appearance ,
                li.administrator ,
                div#screen-meta,
                .notice.notice-error,
                .error {
                    display: none;
                }
			</style>
		<?php } 
	if( 'event-task' == get_post_type($_GET['post'])) { 
	    ?>
	        <style>
	        div#edit-slug-box,
            a.page-title-action,h1.wp-heading-inline {
                display: none !important;
            }
            </style>
	    <?php 
	}
	?>
	
	<script>var plugin_url = '<?php echo plugins_url()?>';</script>

	<?php 
}); 
 

add_action( 'do_meta_boxes', 'wpdocs_remove_plugin_metaboxes' );
 
function wpdocs_remove_plugin_metaboxes(){
   $user = wp_get_current_user();
   
   
   $allowed_roles = array('administrator');
   if( array_intersect($allowed_roles, $user->roles ) ) return;
   
   remove_meta_box( 'astra_settings_meta_box', 'article', 'side' ); // Remove Edit Flow Editorial Metadata
}

add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
global $current_user;
  $username = $current_user->user_login;
    if( $current_user->roles[0] == 'administrator') return;
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'admin'",$user_search->query_where);
 
}


function custom_add_user_id_column($columns) {
    unset( $columns['posts'] );
    $columns['user_id'] = 'Articles';
    
    return $columns;
}
add_filter('manage_users_columns', 'custom_add_user_id_column');
//Adds Content To The Custom Added Column
function custom_show_user_id_column_content($value, $column_name, $user_id) {
    $user = get_userdata( $user_id );
    
    
    if ( 'user_id' == $column_name ) 
        return '<a href="edit.php?author='.$user_id.'&post_type=article" class="edit"><span aria-hidden="true">'.count( get_posts( array( 
            'post_type' => 'article', 
            'author'    => $user_id, 
            'nopaging'  => true, // display all posts
        ) ) ).'</span></a>';
    
        
    //return $value;
}
add_filter('manage_users_custom_column',  'custom_show_user_id_column_content', 10, 3);


function remove_dashboard_meta() {
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    //remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
     remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
}
add_action('admin_init', 'remove_dashboard_meta');



function rudr_mailchimp_curl_connect( $url, $request_type, $api_key, $data = array() ) {
	if( $request_type == 'GET' )
		$url .= '?' . http_build_query($data);
	
	$mch = curl_init();
	$headers = array(
		'Content-Type: application/json',
		'Authorization: Basic '.base64_encode( 'user:'. $api_key )
	);
	curl_setopt($mch, CURLOPT_URL, $url );
	curl_setopt($mch, CURLOPT_HTTPHEADER, $headers);
	//curl_setopt($mch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
	curl_setopt($mch, CURLOPT_RETURNTRANSFER, true); // do not echo the result, write it into variable
	curl_setopt($mch, CURLOPT_CUSTOMREQUEST, $request_type); // according to MailChimp API: POST/GET/PATCH/PUT/DELETE
	curl_setopt($mch, CURLOPT_TIMEOUT, 10);
	curl_setopt($mch, CURLOPT_SSL_VERIFYPEER, false); // certificate verification for TLS/SSL connection
	
	if( $request_type != 'GET' ) {
		curl_setopt($mch, CURLOPT_POST, true);
		curl_setopt($mch, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
	}
 
	return curl_exec($mch);
}
 

add_action('wp_head',function(){
    
 
 
 
    $email = 'porrasjohnricardo530@gmail.com';
    $status = 'subscribed'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
    $list_id = 'f79596a756'; // where to get it read above
    $api_key = '88d55255a904443bf9c64d39fd89bce4-us20'; // where to get it read above
    $merge_fields = array('FNAME' => 'Misha','LNAME' => 'Rudrastyh');
     
   // $data = rudr_mailchimp_subscriber_status($email, $status, $list_id, $api_key, $merge_fields );
     
    // Query String Perameters are here
    // for more reference please vizit http://developer.mailchimp.com/documentation/mailchimp/reference/lists/
  
    $data = array(
	'list_id' => 'f79596a756','count'=>'999',	'email' => 'porrasjohnricardo530@gmail.com'
    );
    $url = 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/campaigns/';
    $result = json_decode( rudr_mailchimp_curl_connect( $url, 'GET', $api_key, $data) );

    //print_r($result);

    if( !empty($result->lists) ) {
    	echo '';
    	foreach( $result->lists as $list ){
    		echo '' . $list->name . ' (' . $list->stats->member_count . ')';
    		// you can also use $list->date_created, $list->stats->unsubscribe_count, $list->stats->cleaned_count or vizit MailChimp API Reference for more parameters (link is above)
    	}
    	echo '';
    } elseif ( is_int( $result->status ) ) { // full error glossary is here http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/
    	echo '' . $result->title . ': ' . $result->detail;
    }
 
});


function jba_disable_editor_fullscreen_by_default() {
    $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
    wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );
 