<?php
/**
 * Schema Pro Adoon Init
 *
 * @package Schema Pro Adoon
 */

if ( ! class_exists( 'Schema_Pro_Addon' ) ) {

	/**
	 * Schema_Pro_Addon initial setup
	 *
	 * @since 1.0.0
	 */
	class Schema_Pro_Addon {

		/**
		 * Class instance.
		 *
		 * @access private
		 * @var $instance Class instance.
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 *  Constructor
		 */
		public function __construct() {

			$this->init();
		}

		/**
		 * Initialize
		 *
		 * @return void
		 */
		public function init() {

			add_filter( 'wp_schema_pro_schema_meta_fields', array( $this, 'new_schema_type' ) );
		}

		/**
		 * Schema Types
		 *
		 * @param  array $schemas Schemas List.
		 * @return array
		 */
		public function new_schema_type( $schemas ) {

			/**
			 * Add New Organization Schema Type.
			 *
			 * Index key with `bsf-aiosrs-` prefix, Example: `bsf-aiosrs-organization`.
			 *
			 * Help: 
			 * 1. key           : Schema Key
			 * 2. icon          : Schema Icon (http://screenshots.sharkz.in/dinesh/2017/11/2017-11-29_15-20-45.png)
			 * 3. label         : Schema Label
			 * 4. guidline-link : Url to Enable a Guidlines Link (http://screenshots.sharkz.in/dinesh/2017/11/2017-11-29_15-22-21.png)
			 * 5. path          : Directory path where schema markup file exist.
			 */
			$schemas['bsf-aiosrs-organization'] = array(
				'key'            => 'organization',
				'icon'           => 'dashicons dashicons-admin-site',
				'label'          => __( 'Organization', 'wp-schema-pro' ),
				'guideline-link' => 'http://schema.org/Organization',
				'path'           => SCHEMA_PRO_ADDON_DIR . 'schema/',
				'subkeys'        => array(
					'orgnization-name' => array(
						'label'    => esc_html__( 'Name', 'wp-schema-pro' ),
						'type'     => 'text',
						'default'  => 'blogname',
						'required' => true,
					),
					'site-logo'        => array(
						'label'    => esc_html__( 'Logo', 'wp-schema-pro' ),
						'type'     => 'image',
						'default'  => 'site_logo',
						'required' => true,
					),
					'url'              => array(
						'label'   => esc_html__( 'URL', 'wp-schema-pro' ),
						'type'    => 'text',
						'default' => 'site_url',
					),
				),
			);

			return $schemas;
		}

	}
}// End if().

/**
 * Kicking this off by calling 'get_instance()' method
 */
Schema_Pro_Addon::get_instance();
