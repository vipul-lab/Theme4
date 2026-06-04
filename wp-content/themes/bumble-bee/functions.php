<?php



/* =========================
   LOAD JS IN ADMIN (IMPORTANT FIX)
========================= */
function my_acf_admin_scripts($hook) {

    // Load only in ACF pages (optional but better)
    if (
        strpos($hook, 'acf') === false &&
        strpos($hook, 'post') === false
    ) {
        return;
    }

    wp_enqueue_script(
        'acf-layout-previews',
        get_stylesheet_directory_uri() . '/assets/js/acf-preview.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_localize_script('acf-layout-previews', 'acfPreview', array(
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('admin_enqueue_scripts', 'my_acf_admin_scripts');


/* =========================
   CSS FOR FIELD GROUP
========================= */
add_action('admin_head', function(){
    echo '<style>
        .acf-fc-popup {
            max-height: 400px;
            overflow-y: auto;
            padding:8px;
        }
        .acf-field-setting-fc_layout {
            padding-bottom: 15px;
        }
        .acf-fc-popup a{
            padding: 10px;
            border-radius: 6px;
        }
        .acf-fc-popup a:hover{
            background:#efefef;
        }
        .layout-preview-img {
            display: block;
            margin: 8px;
            max-width: 250px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
    </style>';
});


/* =========================
   LAYOUT TITLE IMAGE (EDITOR VIEW)
========================= */
add_filter('acf/fields/flexible_content/layout_title', 'acf_layout_preview_image', 10, 4);

function acf_layout_preview_image($title, $field, $layout, $i) {

    $image_path = get_template_directory() . '/acf-layout-previews/' . $layout['name'] . '.png';
    $image_url  = get_template_directory_uri() . '/acf-layout-previews/' . $layout['name'] . '.png';

    if (file_exists($image_path)) {
        $title .= '<div style="margin-top:10px;">
                    <img src="'.$image_url.'" style="max-width:220px;border:1px solid #ddd;border-radius:6px;" />
                   </div>';
    }

    return $title;
}




//Theme all CSS start
function load_stylesheets() {
    wp_register_style( 'owlslider', get_template_directory_uri() . '/assets/css/owl-slider-min.css', array(), filemtime( get_template_directory() . '/assets/css/owl-slider-min.css' ), 'all' );
    wp_enqueue_style( 'owlslider' );
    wp_register_style( 'owldefaul', get_template_directory_uri() . '/assets/css/owl-defaul.css', array(), filemtime( get_template_directory() . '/assets/css/owl-defaul.css' ), 'all' );
    wp_enqueue_style( 'owldefaul' );
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.css', array(), filemtime( get_template_directory() . '/assets/css/all.css' ), 'all' );
    wp_enqueue_style( 'fontawesome' );
    wp_register_style( 'ktui', get_template_directory_uri() . '/assets/css/ktui.css', array(), filemtime( get_template_directory() . '/assets/css/ktui.css' ), 'all' );
    wp_enqueue_style( 'ktui' );
    wp_register_style( 'output', get_template_directory_uri() . '/assets/css/output.css', array(), filemtime( get_template_directory() . '/assets/css/output.css' ), 'all' );
    wp_enqueue_style( 'output' );
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

//Theme all script Start
function load_javascript() {
    wp_register_script( 'jQuery', get_template_directory_uri() . '/assets/js/jQuery.js', array(), '1.0', true );
    wp_enqueue_script( 'jQuery' );
    wp_register_script( 'ktui', get_template_directory_uri() . '/assets/js/ktui.min.js', array( 'jQuery' ), '1.0', true );
    wp_enqueue_script( 'ktui' );
    wp_register_script( 'owlmin', get_template_directory_uri() . '/assets/js/owl.min.js', array( 'jQuery' ), '1.0', true );
    wp_enqueue_script( 'owlmin' );
    wp_register_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jQuery' ), '6.0', true );
    wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

function add_nav_link_class( $atts, $item, $args ) {
    if ( $args->theme_location == 'main-menu' ) {
        $atts[ 'class' ] = 'nav-link'; // Add the nav-link class to <a> tag
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_nav_link_class', 10, 3 );


//SVG file type upload function start
add_filter( 'wp_check_filetype_and_ext', function ( $data, $file, $filename, $mimes ) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext' => $filetype[ 'ext' ],
        'type' => $filetype[ 'type' ],
        'proper_filename' => $data[ 'proper_filename' ]
    ];

}, 10, 4 );

function cc_mime_types( $mimes ) {
    $mimes[ 'svg' ] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action( 'admin_head', 'fix_svg' );

//Website Menu Area Start
add_theme_support( 'menus' );
register_nav_menus(
    array(
        'main-menu' => __( 'Main Menu', 'theme' ),
        'quick-menu' => __( 'Quick Links', 'theme' ),
        'useful-menu' => __( 'Useful Links', 'theme' ),
    )
);

// Register custom image size
function custom_thumbnail_size() {
    add_image_size( 'custom-thumb', 450, 300, true ); // Crop to exactly 450x300 pixels
}
add_action( 'after_setup_theme', 'custom_thumbnail_size' );

//Featured Images & Post Thumbnails
add_theme_support( 'post-thumbnails' );
// Service menu fucntion start
function my_custom_page_type() {
    $labels = array(
        'name' => _x( 'Services', 'post type general name', 'textdomain' ),
        'singular_name' => _x( 'Service', 'post type singular name', 'textdomain' ),
        'menu_name' => _x( 'Services', 'admin menu', 'textdomain' ),
        'name_admin_bar' => _x( 'Service', 'add new on admin bar', 'textdomain' ),
        'add_new' => _x( 'Add New', 'service', 'textdomain' ),
        'add_new_item' => __( 'Add New Service', 'textdomain' ),
        'new_item' => __( 'New Service', 'textdomain' ),
        'edit_item' => __( 'Edit Service', 'textdomain' ),
        'view_item' => __( 'View Service', 'textdomain' ),
        'all_items' => __( 'All Services', 'textdomain' ),
        'search_items' => __( 'Search Services', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Services:', 'textdomain' ),
        'not_found' => __( 'No Services found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No Services found in Trash.', 'textdomain' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'service' ),
        'capability_type' => 'page',
        'hierarchical' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-category',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' ),
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'my_custom_page_type' );

function add_services_meta_box() {
    add_meta_box(
        'services_meta_box', // Meta box ID
        'Additional Information', // Meta box title
        'services_meta_box_callback', // Callback function
        'services', // Post type
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_services_meta_box' );

function services_meta_box_callback( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'save_services_meta_box_data', 'services_meta_box_nonce' );

    // Retrieve an existing value from the database.
    $value = get_post_meta( $post->ID, '_services_meta_value_key', true );

    // Display the form, using the current value.
    echo '<label for="services_meta_field">My Meta Field</label>';
    echo '<input type="text" id="services_meta_field" name="services_meta_field" value="' . esc_attr( $value ) . '" size="25" />';
}

function save_services_meta_box_data( $post_id ) {
    // Check if our nonce is set.
    if ( !isset( $_POST[ 'services_meta_box_nonce' ] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST[ 'services_meta_box_nonce' ], 'save_services_meta_box_data' ) ) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don’t want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST[ 'services_meta_field' ] ) ) {
        $my_data = sanitize_text_field( $_POST[ 'services_meta_field' ] );
        update_post_meta( $post_id, '_services_meta_value_key', $my_data );
    }
}
add_action( 'save_post', 'save_services_meta_box_data' );

//Career Menu 
// function career_page_type() {
//     $labels = array(
//         'name' => _x( 'Career', 'post type general name', 'textdomain' ),
//         'singular_name' => _x( 'Career', 'post type singular name', 'textdomain' ),
//         'menu_name' => _x( 'Career', 'admin menu', 'textdomain' ),
//         'name_admin_bar' => _x( 'Career', 'add new on admin bar', 'textdomain' ),
//         'add_new' => _x( 'Add New', 'career', 'textdomain' ),
//         'add_new_item' => __( 'Add New Career', 'textdomain' ),
//         'new_item' => __( 'New Career', 'textdomain' ),
//         'edit_item' => __( 'Edit Career', 'textdomain' ),
//         'view_item' => __( 'View Career', 'textdomain' ),
//         'all_items' => __( 'All Career', 'textdomain' ),
//         'search_items' => __( 'Search Career', 'textdomain' ),
//         'parent_item_colon' => __( 'Parent Career:', 'textdomain' ),
//         'not_found' => __( 'No Career found.', 'textdomain' ),
//         'not_found_in_trash' => __( 'No Career found in Trash.', 'textdomain' ),
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array( 'slug' => 'career' ),
//         'capability_type' => 'page',
//         'hierarchical' => true,
//         'menu_position' => 6,
//         'menu_icon' => 'dashicons-category',
//         'supports' => array( 'title', 'author', 'thumbnail', 'page-attributes' ),
//     );

//     register_post_type( 'careers', $args );
// }
// add_action( 'init', 'career_page_type' );

function manage_custom_role() {
    $role_name = 'custom_admin';
    $display_name = 'Admin';

    $capabilities = array(
        'create_users' => true,
        'delete_others_pages' => true,
        'delete_pages' => true,
        'delete_private_pages' => true,
        'delete_published_pages' => true,
        'delete_users' => true,
        'edit_dashboard' => true,
        'edit_others_pages' => true,
        'edit_pages' => true,
        'edit_posts' => true,
        'edit_private_pages' => true,
        'edit_published_pages' => true,
        'edit_users' => true,
        'install_languages' => true,
        'list_users' => true,
        'manage_links' => true,
        'moderate_comments' => true,
        'promote_users' => true,
        'publish_pages' => true,
        'read' => true,
        'read_private_pages' => true,
        'remove_users' => true,
        'unfiltered_html' => true,
        'unfiltered_upload' => true,
        'update_core' => true,
        'upload_files' => true,
        'ure_create_capabilities' => true,
        'ure_create_roles' => true,
        'ure_delete_capabilities' => true,
        'ure_delete_roles' => true,
        'edit_theme_options' => true,
        'manage_options' => true,
        'delete_posts' => true,
        'edit_others_posts' => true,
        'edit_published_posts' => true,
        'edit_private_posts' => true,
        'delete_others_posts' => true,
        'delete_published_posts' => true,
        'publish_posts' => true,
        'read_private_posts' => true
    );

    if ( null === get_role( $role_name ) ) {
        add_role( $role_name, $display_name, $capabilities );
    } else {
        $role = get_role( $role_name );
        if ( $role ) {
            foreach ( $capabilities as $cap => $grant ) {
                $role->add_cap( $cap, $grant );
            }
        }
    }
}

add_action( 'after_setup_theme', 'manage_custom_role' );

// Hide Administrator role for custom_admin users
function hide_admin_role_for_custom_admin( $roles ) {
    if ( current_user_can( 'custom_admin' ) ) {
        unset( $roles['administrator'] );
        unset( $roles['editor'] );
    }
    return $roles;
}
add_filter( 'editable_roles', 'hide_admin_role_for_custom_admin' );

// Hide Administrator users in user list for custom_admin users
function exclude_admin_users_for_custom_admin( $query ) {
    if ( current_user_can( 'custom_admin' ) && is_admin() && $query->is_main_query() && $query->get( 'post_type' ) === 'user' ) {
        $meta_query = array(
            'relation' => 'AND',
            array(
                'key'     => 'wp_capabilities',
                'value'   => 'administrator',
                'compare' => 'NOT LIKE'
            ),
            array(
                'key'     => 'wp_capabilities',
                'value'   => 'editor',
                'compare' => 'NOT LIKE'
            )
        );
        $query->set( 'meta_query', $meta_query );
    }
}
add_action( 'pre_get_posts', 'exclude_admin_users_for_custom_admin' );

function clean_phone_number( $phone_number ) {
    // Remove spaces and dashes from the phone number
    $cleaned_number = str_replace( [ ' ' ], '', $phone_number );
    return $cleaned_number;
}

function hide_acf_menu_for_custom_role() {
    // Check if the current user has the custom role
    if (current_user_can('custom_admin')) {
        // Remove the ACF menu page
        remove_menu_page('edit.php?post_type=acf-field-group');
    }
}
add_action('admin_menu', 'hide_acf_menu_for_custom_role', 99);

function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

//add role
//add_role('manager', 'Manager', array('read' => true, 'create_posts' => true, 'edit_posts' => true, 'edit_others_posts' => true, 'publish_posts' => true, 'manage_categories' => true, ));

//remove role
//remove_role( 'manager' );
?>