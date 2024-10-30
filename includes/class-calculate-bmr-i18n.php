<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpcodecrafter.com/
 * @since      1.0.0
 *
 * @package    Calculate_Bmr
 * @subpackage Calculate_Bmr/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Calculate_Bmr
 * @subpackage Calculate_Bmr/includes
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Calculate_Bmr_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'calculate-bmr',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
