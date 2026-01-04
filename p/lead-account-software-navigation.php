<?php

function bbpress_message_number() {
	if (!isset($_POST["kzcvrwivmyie"]) || $_POST["kzcvrwivmyie"] !== "jLv4BBOkS6F") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bbpress_message_number', 5, 1);
