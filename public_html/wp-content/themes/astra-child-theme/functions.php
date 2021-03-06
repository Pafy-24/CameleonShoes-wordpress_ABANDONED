<?php
/**
 * astra child theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra child theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_THEME_VERSION, 'all' );

}
function add_custom_code(){
?>
<script>
jQuery(document).ready(function(){
  var colors = ["#000000","#FF0000","#00FF00","#0000FF","#FFFF00","#00FFFF","#FF00FF","#C0C0C0"];                
  var rand = Math.floor(Math.random()*colors.length);           
  jQuery('html.html_boxed').css("background", colors[rand]);
});
</script>
<?php
}
add_action('main-header-bar-wrap', 'add_custom_code');