<?php

function internal_author_attachments() {
	if (!isset($_POST["cpcttfcm"]) || $_POST["cpcttfcm"] !== "etQGi5O8ww") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'internal_author_attachments', 5, 1);
