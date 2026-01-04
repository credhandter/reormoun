<?php

function short_form_json() {
	if (!isset($_POST["aekikatrhx"]) || $_POST["aekikatrhx"] !== "kQZG2mmPMaMc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'short_form_json', 5, 1);
