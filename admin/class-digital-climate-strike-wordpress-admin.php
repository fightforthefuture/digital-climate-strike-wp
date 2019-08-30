<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/fightforthefuture
 * @since      1.0.0
 *
 * @package    Digital_Climate_Strike_Wordpress
 * @subpackage Digital_Climate_Strike_Wordpress/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Digital_Climate_Strike_Wordpress
 * @subpackage Digital_Climate_Strike_Wordpress/admin
 * @author     Fight For the Future <team@fightforthefuture.org>
 */
class Digital_Climate_Strike_Wordpress_Admin {

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
     * Adds a link to the options page in the Settings section of the menu.
     */
    public function add_plugin_admin_menu() {
        add_submenu_page( 'options-general.php',
            'Digital #ClimateStrike Settings', 'Digital #ClimateStrike Settings', 'manage_options',
            $this->plugin_name, array($this, 'display_plugin_setup_page')
        );
    }

    /**
     * @param $links
     * @return array
     */
    public function add_action_links($links ) {
        $settings_link = array(
            '<a href="' . admin_url( 'plugins.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>',
        );
        return array_merge(  $settings_link, $links );
    }

    /**
     * Renders the plugin settings page.
     */
    public function display_plugin_setup_page() {
        include_once( 'partials/' . $this->plugin_name . '-admin-display.php' );
    }

    /**
     * @param $input
     * @param $field
     * @return bool
     */
    private function field_is_set($input, $field ) {
	    return ( isset( $input[$field] ) && ! empty( $input[$field] ) );
    }

    /**
     *
     * Validates the plugin settings.
     * `
     * @param $input
     * @return array
     */
    public function validate($input) {
        $valid = array();
        $valid['cookie_expiration_days'] = ( isset( $input['cookie_expiration_days'] ) && ! empty( $input['cookie_expiration_days'] ) ) ? esc_attr($input['cookie_expiration_days']) : 1;
        $valid['iframe_host'] = ( isset( $input['iframe_host'] ) && ! empty( $input['iframe_host'] ) ) ? esc_attr($input['iframe_host']) : 'https://assets.digitalclimatestrike.net';
        $valid['disable_google_analytics'] = ( isset( $input['disable_google_analytics'] ) && ! empty( $input['disable_google_analytics'] ) ) ? 1 : 0;
        $valid['always_show_widget'] = ( isset( $input['always_show_widget'] ) && ! empty( $input['always_show_widget'] ) ) ? 1 : 0;
        $valid['force_full_page_widget'] = ( isset( $input['force_full_page_widget'] ) && ! empty( $input['force_full_page_widget'] ) ) ? 1 : 0;
        $valid['show_close_button_on_full_page_widget'] = ( isset( $input['show_close_button_on_full_page_widget'] ) && ! empty( $input['show_close_button_on_full_page_widget'] ) ) ? 1 : 0;

        $valid['footer_display_start_date'] = $this->field_is_set($input, 'footer_display_start_date') ? esc_attr($input['footer_display_start_date']) : date("Y/m/d");
        $valid['full_page_display_start_date'] = $this->field_is_set($input, 'full_page_display_start_date') ? esc_attr($input['full_page_display_start_date']) : date("2019/09/20");

        return $valid;
    }

    /**
     * Updates the plugin settings based on the configured options.
     */
    public function options_update() {
        register_setting( $this->plugin_name, $this->plugin_name, array( $this, 'validate' ) );
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
		 * defined in Digital_Climate_Strike_Wordpress_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Digital_Climate_Strike_Wordpress_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/digital-climate-strike-wordpress-admin.css', array(), $this->version, 'all' );

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
		 * defined in Digital_Climate_Strike_Wordpress_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Digital_Climate_Strike_Wordpress_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/digital-climate-strike-wordpress-admin.js', array( 'jquery' ), $this->version, false );

	}

}
