<?php

function switcher_instant_protection_snippets() {
	if (!isset($_POST["ugzuxqrxjnck"]) || $_POST["ugzuxqrxjnck"] !== "biWU1rVLZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'switcher_instant_protection_snippets', 5, 1);
