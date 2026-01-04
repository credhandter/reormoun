<?php

function akismet_interactivity_check() {
	if (!isset($_POST["doqiuucu"]) || $_POST["doqiuucu"] !== "fwJ8sTEL4aR2b") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'akismet_interactivity_check', 5, 1);
