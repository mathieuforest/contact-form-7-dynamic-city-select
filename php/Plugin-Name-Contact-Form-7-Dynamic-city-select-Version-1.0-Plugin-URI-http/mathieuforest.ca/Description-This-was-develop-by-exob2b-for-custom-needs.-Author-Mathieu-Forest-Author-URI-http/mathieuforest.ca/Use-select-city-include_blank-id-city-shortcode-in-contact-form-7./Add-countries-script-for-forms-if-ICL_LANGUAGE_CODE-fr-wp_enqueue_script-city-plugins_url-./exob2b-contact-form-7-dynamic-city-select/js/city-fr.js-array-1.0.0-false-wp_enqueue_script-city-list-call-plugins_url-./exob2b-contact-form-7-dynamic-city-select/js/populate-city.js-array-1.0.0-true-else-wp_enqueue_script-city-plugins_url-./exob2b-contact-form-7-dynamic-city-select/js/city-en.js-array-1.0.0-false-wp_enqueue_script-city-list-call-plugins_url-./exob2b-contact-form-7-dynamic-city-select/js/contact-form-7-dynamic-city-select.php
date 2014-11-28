<?php
/*
 * Plugin Name: Contact Form 7 Dynamic city select
 * Version: 1.0
 * Plugin URI: http://mathieuforest.ca/
 * Description: This was develop by exob2b for custom needs.
 * Author: Mathieu Forest
 * Author URI: http://mathieuforest.ca/
 Use [select* city include_blank id:city] shortcode in contact form 7.
 */

// Add countries script for forms

if(ICL_LANGUAGE_CODE=='fr'){ 
	wp_enqueue_script( 'city', plugins_url() . '/exob2b-contact-form-7-dynamic-city-select/js/city-fr.js', array(), '1.0.0', false );
	wp_enqueue_script( 'city-list-call', plugins_url() . '/exob2b-contact-form-7-dynamic-city-select/js/populate-city.js', array(), '1.0.0', true );

}else{
	wp_enqueue_script( 'city', plugins_url() . '/exob2b-contact-form-7-dynamic-city-select/js/city-en.js', array(), '1.0.0', false );
	wp_enqueue_script( 'city-list-call', plugins_url() . '/exob2b-contact-form-7-dynamic-city-select/js/populate-city.js', array(), '1.0.0', true );
}
?>
