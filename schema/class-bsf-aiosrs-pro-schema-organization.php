<?php
/**
 * Schemas Template.
 *
 * @package Schema Pro
 * @since 1.0.0
 *
 * Step 1: File Name - `class-bsf-aiosrs-pro-schema-{$schema_key}`, Example: `class-bsf-aiosrs-pro-schema-organization`
 * Step 2: Class Name - `BSF_AIOSRS_Pro_Schema_{$schema_key}`, If $schema_key is `organization` then class name should be `BSF_AIOSRS_Pro_Schema_Organization`.
 */

if ( ! class_exists( 'BSF_AIOSRS_Pro_Schema_Organization' ) ) {

	/**
	 * AIOSRS Schemas Initialization
	 *
	 * @since 1.0.0
	 */
	class BSF_AIOSRS_Pro_Schema_Organization {

		/**
		 * Render Schema.
		 *
		 * @param  array $data Meta Data.
		 * @param  array $post Current Post Array.
		 * @return array
		 */
		public static function render( $data, $post ) {
			$schema = array();

			$schema['@context'] = 'https://schema.org';
			$schema['@type'] = 'Organization';

			if ( isset( $data['orgnization-name'] ) && ! empty( $data['orgnization-name'] ) ) {
				$schema['name']  = wp_strip_all_tags( $data['orgnization-name'] );
			}

			if ( isset( $data['site-logo'] ) && ! empty( $data['site-logo'] ) ) {
				$schema['logo']  = BSF_AIOSRS_Pro_Schema_Template::get_image_schema( $data['site-logo'], 'ImageObject' );
			}

			if ( isset( $data['url'] ) && ! empty( $data['url'] ) ) {
				$schema['url']  = esc_url( $data['url'] );
			}

			return apply_filters( 'wp_schema_pro_schema_orgnization', $schema, $data, $post );
		}

	}
} // End if().
