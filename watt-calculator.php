<?php
/**
 * Plugin Name:       WATT CALCULATOR
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Calculate required watts for variable cpu parameter
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      6.2
 * Author:            Faisal Feroze
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 */

 if(!defined('ABSPATH')){
     exit;
 }

 // if ( ! class_exists( 'WP_List_Table' ) ) {
	// require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
 // }

define( 'WATT_CALCULATOR__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( WATT_CALCULATOR__PLUGIN_DIR . 'db-table-setup.php' );
require_once( WATT_CALCULATOR__PLUGIN_DIR . 'tabs_function.php' );

register_activation_hook( __FILE__, 'db_table_setup_for_plugin' );

function db_table_setup_for_plugin(){
  initiate_table_mother_board();
  initiate_table_vdoCard_brand();
  initiate_table_storage();
  initiate_table_vdoCard();
  initiate_table_memory();
  initiate_table_cpu();
}


wp_enqueue_script( 'script', plugin_dir_url(__FILE__) . '/admin/js/wc_admin.js', array ( 'jquery' ), 1.1, true);
wp_register_style('wc_namespace', plugins_url('/admin/css/style.css',__FILE__ ));
wp_enqueue_style('wc_namespace');


// add_action( 'wp_enqueue_scripts', 'my_enqueue' );
// function my_enqueue() {
//     wp_enqueue_script('ajax_custom_script', plugin_dir_url(__FILE__) . 'admin/js/wc_admin.js', array('jquery'), '1.0', true);
//     wp_localize_script( 'ajax_custom_script', 'frontendajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
//
// }


function wporg_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        //settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        //do_settings_sections( 'wporg' );
        // output save settings button
        //submit_button( 'Save Settings' );

        function page_tabs() {
          if(isset($_GET['tab'])){
            $current = $_GET['tab'];
          }
          else{
            $current = "first";
          }
            $tabs = array(
                'first'   => __( 'CPU', 'plugin-textdomain' ),
                'second'  => __( 'Memory', 'plugin-textdomain' ),
                'third'   => __( 'Video Card', 'plugin-textdomain' ),
                'fourth'  => __( 'Video Card Brand', 'plugin-textdomain' ),
                'fifth'   => __( 'Storage', 'plugin-textdomain' ),
                'sixth'   => __( 'Motherboard', 'plugin-textdomain' ),
            );
            $html = '<h2 class="nav-tab-wrapper">';
            foreach( $tabs as $tab => $name ){
                $class = ( $tab == $current ) ? 'nav-tab-active' : '';
                $html .= '<a class="nav-tab ' . $class . '" href="?page=watt-calculation&tab=' . $tab . '">' . $name . '</a>';
            }
            $html .= '</h2>';
            echo $html;
        }
      ?>
      </form>
    </div>
    <?php
    page_tabs();
    tabview();

}



function tabview(){
  if(isset($_GET['tab'])){
    $tab_no = $_GET['tab'];

    if($tab_no=='first'){
      showCpu();
    }

    if($tab_no=='second'){
      //echo '2';
      showRam();
    }

    if($tab_no=='third'){
      echo '3';
    }

    if($tab_no=='fourth'){
      echo '4';
    }

    if($tab_no=='fifth'){
      //echo '5';
      showStorage();
    }

    if($tab_no=='sixth'){
      //echo '6';
      showMotherboard();
    }

  }
  else{
    showCpu();
  }

}


add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Watt Calculator',
        'Watt Calculator',
        'manage_options',
        'watt-calculation',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
