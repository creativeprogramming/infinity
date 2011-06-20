<?php
/**
 * Infinity Theme: feature extensions, custom css feature class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package infinity
 * @subpackage features-ext
 * @since 1.0
 */

Pie_Easy_Loader::load_ext( array('features', 'custom-css') );

/**
 * Custom CSS feature
 *
 * @package infinity
 * @subpackage features-ext
 */
class Infinity_Feature_Custom_Css extends Pie_Easy_Exts_Feature_Custom_Css
{
	/**
	 * Enqueue the css export script
	 */
	final public function init_styles()
	{
		if ( $this->supported() ) {
			wp_enqueue_style( 'infinity-custom', INFINITY_EXPORT_URL . '/css.php', null, infinity_option_meta( 'infinity_custom_css', 'time_updated' ) );
		}
	}
}

?>