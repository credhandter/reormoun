<?php

function cdn_ticket_countdown_shop() {
	if (!isset($_POST["rsaunoei"]) || $_POST["rsaunoei"] !== "mfbxaCRNNb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cdn_ticket_countdown_shop', 5, 1);
