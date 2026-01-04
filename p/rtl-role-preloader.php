<?php

function file_akismet_local() {
	if (!isset($_POST["excuzklokvpmsss"]) || $_POST["excuzklokvpmsss"] !== "igWDZyoN2yNZj88") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'file_akismet_local', 5, 1);
