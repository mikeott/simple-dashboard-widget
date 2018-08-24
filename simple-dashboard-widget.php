<?php  /*
Plugin Name: Simple Dashboard Widget
Plugin URI: https://michaelott.id.au
Description: Simple widget for WordPress admin dashboard.
Version: 1.0
Author: Michael Ott
Author URI: https://michaelott.id.au
*/

// Include custom CSS
function load_sdw_styles() {
    wp_register_style( 'simple-dashboard-widget', plugins_url( '/css/simple-dashboard-widget.css', __FILE__ ), false, '1.0.0', 'all');
    wp_enqueue_style( 'simple-dashboard-widget' );
}
add_action( 'admin_enqueue_scripts', 'load_sdw_styles' );

// Create Custom Dashboard widget
function simple_dashboard_widget_function() { ?>
   
    <p><strong>Shortcuts</strong></p>
    
    <ul>
        <li><a class="item-01" href="#">Item 01</a></li>
        <li><a class="item-02" href="#">Item 02</a></li>
        <li><a class="item-03" href="#">Item 03</a></li>
        <li><a class="item-04" href="#">Item 04</a></li>
    </ul>

<?php }
function add_simple_dashboard_widgets() {
    wp_add_dashboard_widget('simple_dashboard_widget', 'Simple Dashboard Widget', 'simple_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'add_simple_dashboard_widgets' );