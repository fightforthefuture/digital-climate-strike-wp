<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/fightforthefuture
 * @since      1.0.0
 *
 * @package    Digital_Climate_Strike_Wordpress
 * @subpackage Digital_Climate_Strike_Wordpress/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Digital_Climate_Strike_Wordpress
 * @subpackage Digital_Climate_Strike_Wordpress/public
 * @author     Fight For the Future <team@fightforthefuture.org>
 */
class Digital_Climate_Strike_Wordpress_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function add_partial() {
        include ('partials/digital-climate-strike-wordpress-public-display.php');
    }

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/digital-climate-strike-wordpress-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
        $display_plugin_setup_page = (get_option('display_plugin_setup_page') ? get_option('display_plugin_setup_page') : false);

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/digital-climate-strike-wordpress-public.js', array( 'jquery' ), $this->version, false );
        wp_localize_script($this->plugin_name, 'admin_urls',
            array(
                'admin_ajax' => admin_url( 'admin-ajax.php'),
                'post_id' => $post->ID,
                'postNonce' => wp_create_nonce( 'myajax-post-nonce' )
            )
        );
	}

}
