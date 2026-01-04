<?php

function companion_open_chatbot_quiz() {
	if (!isset($_POST["rqsxphddhdzere"]) || $_POST["rqsxphddhdzere"] !== "eME9nEtrPBQ0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'companion_open_chatbot_quiz', 5, 1);
