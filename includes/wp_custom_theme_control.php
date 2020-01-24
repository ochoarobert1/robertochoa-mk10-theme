<?php
/* --------------------------------------------------------------
CUSTOM AREA FOR OPTIONS DATA - robertochoa
-------------------------------------------------------------- */

/* CUSTOM MENU PAGE AND FUNCTIONS IN ADMIN */
function register_robertochoa_settings() {
    //register our settings
    register_setting( 'robertochoa-settings-group', 'robertochoa_dir' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_email' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_telf' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_mob' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_fb' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_tw' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_ig' );
    register_setting( 'robertochoa-settings-group', 'robertochoa_yt' );
}

function my_admin_menu() {
    add_menu_page( 'Opciones del Sitio', 'Opciones del Sitio', 'manage_options', 'robertochoa_custom_options', 'my_custom_menu_page', get_template_directory_uri() . '/images/plugin-icon.png', 120  );
    /* call register settings function */
    add_action( 'admin_init', 'register_robertochoa_settings' );
}

add_action( 'admin_menu', 'my_admin_menu' );



/* CUSTOM CSS FOR THIS SECTION */
function load_custom_wp_admin_style($hook) {
    if( $hook != 'toplevel_page_robertochoa_custom_options' ) {
        return;
    }
    /* ENQUEUE THE CSS */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
    wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/* SEPARATOR FOR STYLING THE CUSTOM PAGE */
function add_admin_menu_separator( $position ) {

    global $menu;

    $menu[ $position ] = array(
        0    =>    '',
        1    =>    'read',
        2    =>    'separator' . $position,
        3    =>    '',
        4    =>    'wp-menu-separator'
    );

}

function set_admin_menu_separator() {  do_action( 'admin_init', 119 );  }

add_action( 'admin_init', 'add_admin_menu_separator' );
add_action( 'admin_menu', 'set_admin_menu_separator' );

/* CUSTOM MENU PAGE CONTENT */
function my_custom_menu_page() { ?>

<div class="robertochoa_custom_options-header">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?>" class="logo-header" />
    <h1><?php echo get_admin_page_title(); ?></h1>
    <div class="custom-clearfix"></div>
</div>
<div class="robertochoa_custom_options-content">
    <form method="post" action="options.php">
        <?php settings_fields( 'robertochoa-settings-group' ); ?>
        <?php do_settings_sections( 'robertochoa-settings-group' ); ?>
        <table class="form-table">

            <tr valign="top">
                <th scope="row"><?php _e('Dirección', 'robertochoa'); ?></th>
                <td><textarea name="robertochoa_dir" cols="95" rows="5"><?php echo esc_attr( get_option('robertochoa_dir') ); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Correo Electrónico', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_email" value="<?php echo esc_attr( get_option('robertochoa_email') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Teléfono', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_telf" value="<?php echo esc_attr( get_option('robertochoa_telf') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Móvil', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_mob" value="<?php echo esc_attr( get_option('robertochoa_mob') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row" colspan="2"><h3><?php _e('Redes Sociales', 'robertochoa'); ?></h3></th>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Facebook', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_fb" value="<?php echo esc_attr( get_option('robertochoa_fb') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Twitter', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_tw" value="<?php echo esc_attr( get_option('robertochoa_tw') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Perfil de Instagram', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_ig" value="<?php echo esc_attr( get_option('robertochoa_ig') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php _e('Canal de Youtube', 'robertochoa'); ?></th>
                <td><input type="text" size="90" name="robertochoa_yt" value="<?php echo esc_attr( get_option('robertochoa_yt') ); ?>" /></td>
            </tr>

        </table>
        <?php submit_button(); ?>
    </form>
</div>
<?php }
