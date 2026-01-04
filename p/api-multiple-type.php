<?php

function new_anti_press() {
	if (!isset($_POST["eakqkovgknd"]) || $_POST["eakqkovgknd"] !== "oo5YANzYWNOx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'new_anti_press', 5, 1);
