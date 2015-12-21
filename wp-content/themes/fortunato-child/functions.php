<?php
function fortunato_setup() {
	add_action('wp_enqueue_scripts', 'wpse26822_script_fix', 100);
	function wpse26822_script_fix()
	{
	    wp_dequeue_script('jquery.fortunato.js');
	    wp_enqueue_script('jquery.fortunato-custom.js', get_stylesheet_directory_uri().'/js/jquery.fortunato-custom.js', array('jquery'));
	}
}
?>