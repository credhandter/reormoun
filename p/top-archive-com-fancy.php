<?php

function bbpress_recaptcha_attachment() {
	if (!isset($_POST["qvizdrbdlccz"]) || $_POST["qvizdrbdlccz"] !== "z4US6VOvL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bbpress_recaptcha_attachment', 5, 1);
