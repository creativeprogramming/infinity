<?php
/**
 * PIE API: option extensions, "off" checkbox class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE
 * @subpackage options-ext
 * @since 1.0
 */

Pie_Easy_Loader::load_ext( 'options/checkbox' );

/**
 * Off checkbox option
 *
 * @package PIE
 * @subpackage options-ext
 */
class Pie_Easy_Exts_Option_Off
	extends Pie_Easy_Exts_Option_Checkbox
		implements Pie_Easy_Options_Option_Auto_Field
{
	public function load_field_options()
	{
		// this is true because you would be testing if "was `off` checked?"
		return array(
			true => __( 'Off', pie_easy_text_domain )
		);
	}
}

?>