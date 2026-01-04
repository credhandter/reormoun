<?php

function frontend_really_soon_modules() {
	if (!isset($_POST["qpfdtgasuncli"]) || $_POST["qpfdtgasuncli"] !== "sI3XSQdSJyxLCkW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'frontend_really_soon_modules', 5, 1);
