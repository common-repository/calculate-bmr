<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wpcodecrafter.com/
 * @since      1.0.0
 *
 * @package    Calculate_Bmr
 * @subpackage Calculate_Bmr/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Calculate_Bmr
 * @subpackage Calculate_Bmr/admin
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Calculate_Bmr_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Calculate_Bmr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Calculate_Bmr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/calculate-bmr-admin.css', array(), $this->version, 'all' );

		//add custom styles
		/*
		//removing added custom styles because In this plugin we have enqueued style only when the shortcode is called in file calculate-bmr.php

		$valid_pages = array("calculate-bmr");

		$dynamic_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

		if(in_array($dynamic_page, $valid_pages)){

			//add all the custom files here
			wp_enqueue_style( 'my_bmr_style', CALCULATE_BMR_PLUGIN_URL . 'admin/css/my-bmr-style.css', array(), $this->version, 'all' );
		}

		*/

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Calculate_Bmr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Calculate_Bmr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/calculate-bmr-admin.js', array( ), $this->version, true );
		
	}	

	public function add_bmr_bmi_menu() {
		//Register Menu Page
		
		add_menu_page(
			"BMI and BMR", //Page title
			"BMI and BMR",// Menu title
			"manage_options", //Admin Level
			"bmi-and-bmr", //Menu Slug
			array($this,"calc_bmi_bmr"), //Callback function
			"dashicons-table-col-before", //icon link
			8);
					
	}
	// Callback function
	public function calc_bmi_bmr(){
		echo "<h3> User shortcode [bmr_shortcode] to display BMR on your pages and posts</h3><br>";
		
		echo "<h3> User shortcode [bmi_shortcode] to display BMI on your pages and posts</h3>";

		echo "<div id='hc-browse-all-plugin-main'>";
			
			echo "<p>Explore additional WordPress plugins and assess their functionality </p>";

			echo '<a href="https://wpcodecrafter.com/products/" target="_blank" class="button button-primary">Browse All Plugins</a>';
		
		echo "</div>";
	}

}
