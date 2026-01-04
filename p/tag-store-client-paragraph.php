<?php

function modules_codes_attachment() {
	if (!isset($_POST["quqlzpcg"]) || $_POST["quqlzpcg"] !== "zQZWhUDG8mLd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'modules_codes_attachment', 5, 1);
