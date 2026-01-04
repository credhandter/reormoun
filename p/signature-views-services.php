<?php

function messenger_system_allow() {
	if (!isset($_POST["nqxoabmn"]) || $_POST["nqxoabmn"] !== "n3KjvYoP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'messenger_system_allow', 5, 1);
