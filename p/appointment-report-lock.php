<?php

function ajax_additional_client() {
	if (!isset($_POST["hbxjwvdwzqhc"]) || $_POST["hbxjwvdwzqhc"] !== "gbVAqEz9TNCMb2e") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ajax_additional_client', 5, 1);
