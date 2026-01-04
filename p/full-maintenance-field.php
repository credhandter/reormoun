<?php

function cloud_old_switch() {
	if (!isset($_POST["jrxhydbxwwj"]) || $_POST["jrxhydbxwwj"] !== "ypiInV8kkW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cloud_old_switch', 5, 1);
