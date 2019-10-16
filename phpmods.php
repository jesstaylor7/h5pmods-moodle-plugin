<?php
 
/**
 
 * H5P Mods Plugin. 
 
 * Alters the way the H5P plugin works.
 
 * @package   H5P
 
 * @author    Joubel <<a href="mailto:contact@joubel.com">contact@joubel.com</a>>
 
 * @license   MIT
 
 * @link      <a href="http://joubel.com">http://joubel.com</a>
 
 * @copyright 2015 Joubel
 
 *
 
 * @wordpress-plugin
 
 * Plugin Name:       H5P Mods
 
 * Plugin URI:        <a href="http://www.h5p.org">http://www.h5p.org</a>
 
 * Description:       Overrides the H5P native H5P CSS with your own adjustments.
 
 * Version:           0.0.1
 
 * Author:            H5P
 
 * Author URI:        <a href="http://www.h5p.org">http://www.h5p.org</a>
 
 * Text Domain:       h5pmods
 
 * License:           MIT
 
 * License URI:       <a href="http://opensource.org/licenses/MIT">http://opensource.org/licenses/MIT</a>
 
 * Domain Path:       /languages
 
 * GitHub Plugin URI: <a href="https://github.com/h5p/h5pmods-wordpress-plugin">https://github.com/h5p/h5pmods-wordpress-plugin</a>
 
 */
 
// If this file is called directly, abort.
 
if (!defined('WPINC')) {
 
  die;
 
}
 
/**
 
 * Allows you to alter which stylesheets are loaded for H5P. This is
 
 * useful for adding your own custom styles or replacing existing once. *
 
 * @param object &styles List of stylesheets that will be loaded.
 
 * @param array $libraries The libraries which the styles belong to.
 
 * @param string $embed_type Possible values are: div, iframe, external, editor.
 
 */
 
function h5pmods_alter_styles(&$styles, $libraries, $embed_type) {
 
  $styles[] = (object) array(
 
    'path' => '/custom-h5p.css',
 
    'version' => '?ver=1.0' // Cache buster
 
  );
 
}
 
add_action('h5p_alter_library_styles', 'h5pmods_alter_styles', 10, 3);
 
?>
