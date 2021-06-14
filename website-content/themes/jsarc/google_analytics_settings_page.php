<?php
/* ----------------------------------------------------------------------------
 * Create WordPress settings page For google analytics scripts
 * See functions.php
 * ------------------------------------------------------------------------- */

class google_analytics_settings_page {
	/**
	 * Array of custom settings/options
	**/
	private $options;

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	 * Add settings page
	 * The page will appear in Admin menu
	 */
	public function add_settings_page() {
		add_menu_page(
			'Google Analytics Settings', // Page title
			'Google Analytics Settings Page', // Title
			'edit_pages', // Capability
			'google-analytics-settings-page', // Url slug
			array( $this, 'create_admin_page' ) // Callback
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page() {
		// Set class property
		$this->options = get_option( 'google_analytics_settings' );
		?>
		<div class="wrap">
			<h2>Google analytics settings page</h2>           
			<form method="post" action="options.php">
			<?php
				// This prints out all hidden setting fields
				settings_fields( 'google_analytics_settings_group' );   
				do_settings_sections( 'google_analytics-settings-page' );
				submit_button(); 
			?>
			</form>
		</div>
	<?php
	}

	/**
	 * Register and add settings
	 */
	public function page_init() {
		register_setting(
			'google_analytics_settings_group', // Option group
			'google_analytics_settings', // Option name
			array( $this, 'sanitize' ) // Sanitize
		);

		add_settings_section(
			'google_analytics_settings_section', // ID
			'Google Anaytics Settings', // Title
			array( $this, 'google_analytics_settings_section' ), // Callback
			'google_analytics-settings-page' // Page
		);

		add_settings_field(
			'measurement_id', // ID
			'GA Measurement ID', // Title 
			array( $this, 'google_analytics_measurementid_html' ), // Callback
			'google_analytics-settings-page', // Page         
			'google_analytics_settings_section'
		);

        add_settings_field(
			'consent_cookie', // ID
			'Consent cookie name', // Title 
			array( $this, 'google_analytics_consent_html' ), // Callback
			'google_analytics-settings-page', // Page         
			'google_analytics_settings_section'
		);

		add_settings_field(
			'enabled', 
			'Enabled', 
			array( $this, 'google_analytics_enabled_html' ), 
			'google_analytics-settings-page',
			'google_analytics_settings_section'
		);
	}

	/**
	 * Sanitize POST data from custom settings form
	 *
	 * @param array $input Contains custom settings which are passed when saving the form
	 */
	public function sanitize( $input ) {
		$sanitized_input= array();
		if( isset( $input['measurement_id'] ) )
			$sanitized_input['measurement_id'] = sanitize_text_field( $input['measurement_id'] );
        if( isset( $input['consent_cookie'] ) )
			$sanitized_input['consent_cookie'] = sanitize_text_field( $input['consent_cookie'] );
		if( isset( $input['enabled'] ) )
			$sanitized_input['enabled'] = sanitize_text_field( $input['enabled'] );

		return $sanitized_input;
	}

	public function google_analytics_settings_section() {
		print('Add Google Analytics tracking (gtag.js) for the specified measurement ID '
         . 'after checking for explicit user consent (true/false) set in the named cookie.');
	}

	public function google_analytics_measurementid_html() {
		printf(
			'<input type="text" id="measurement_id" name="google_analytics_settings[measurement_id]" value="%s" />',
			isset( $this->options['measurement_id'] ) ? esc_attr( $this->options['measurement_id']) : ''
		);
	}

	public function google_analytics_consent_html() {
		printf(
			'<input type="text" id="consent_id" name="google_analytics_settings[consent_cookie]" value="%s" />',
			isset( $this->options['consent_cookie'] ) ? esc_attr( $this->options['consent_cookie']) : ''
		);
	}

	public function google_analytics_enabled_html() {
		printf(
			'<input type="checkbox" id="enabled" name="google_analytics_settings[enabled]" %s />',
			isset( $this->options['enabled'] ) ? 'checked' : ''
		);
	}
}