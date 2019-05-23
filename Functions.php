
<?php
// WordPress Titles
add_theme_support( 'title-tag' );
// Add scripts and stylesheets
function startwordpress_scripts() {
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
'/css/bootstrap.min.css', array(), '3.3.6' );
 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
);
 wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
'/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
// Add Google Fonts
function startwordpress_google_fonts() {
wp_register_style('OpenSans',
'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
wp_enqueue_style( 'OpenSans');
}
add_action('wp_print_styles', 'startwordpress_google_fonts');
// Custom settings
function custom_settings_add_menu() {
 add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Create Custom Global Settings
function custom_settings_page() { ?>
<div class="wrap">
<h1>Custom Settings</h1>
<form method="post" action="options.php">
<?php settings_fields( 'section' );
do_settings_sections( 'theme-options' );
submit_button(); ?>
</form>
</div>


<?php }
function custom_settings_page_setup() {
add_settings_section( 'section', 'All Settings', null, 'theme-options' ); 
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
register_setting('section', 'twitter');
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
add_settings_field( 'github', 'GitHub URL', 'setting_github', 'themeoptions', 'section' );
register_setting( 'section', 'twitter' );
register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );
function setting_github() { ?>
<input type="text" name="github" id="github" value="<?php echo
get_option('github'); ?>" />
<?php }?>
<?php
function create_post_Enseignant(){
 register_post_type('Enseignant',
 array(
 'labels'=>array(
 'name'=>__('Enseignant'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','Enseignant');
 register_taxonomy_for_object_type('post_tag','Enseignant');
}
add_action('init','create_post_Enseignant'); 

function add_curriculum_meta_box(){
 add_meta_box(
 'matiere_meta_box',// $id
 'matiere',// $title
 'show_matiere_meta_box',// $callback
 'Enseignant',// $screen
 'normal',// $context
 'high'// $priority
);
}
add_action('add_meta_boxes','add_matiere_meta_box');



function show_curriculum_meta_box(){
	global $post;
 $meta=get_post_meta($post->ID , 'matiere' , true); ?>
<input type="hidden" name="curriculum_nonce" value="<?php echo wp_create_nonce(basename(__FILE__) );?>">
<?php
}




function save_curriculum_meta( $post_id ) {
// verify nonce
if ( !wp_verify_nonce( $_POST['matiere_nonce'], basename(__FILE__) ) ) {
 return $post_id;
}
// check autosave
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
 return $post_id;
}
// check permissions
if ( 'page' === $_POST['Enseignant'] ) {
 if ( !current_user_can( 'edit_page', $post_id ) ) {
 return $post_id;
 } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
 return $post_id;
 }
}

$old = get_post_meta( $post_id, 'matiere', true );
$new = $_POST['matiere'];
if ( $new && $new !== $old ) {
 update_post_meta( $post_id, 'matiere', $new );
} elseif ( '' === $new && $old ) {
 delete_post_meta( $post_id, 'matiere', $old );
}
}
add_action( 'save_post', 'save_matiere_meta' );
?>



