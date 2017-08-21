<?php
/**
 * @todo
 */

/**
 * Theme Customisation Settings
 *
 * @package WordPress
 * @subpackage New Republique
 * @since New Republique 1.0
 */

function nr_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
	$wp_customize->add_setting('header_textcolor', array(
		'default' => '#000000',
		'transport' => 'refresh'
	));
}
// add_action( 'customize_register', 'nr_customize_register' );