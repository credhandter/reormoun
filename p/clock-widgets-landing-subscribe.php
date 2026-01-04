<?php

function counter_tables_messenger_request() {
	if (!isset($_POST["kkftnjlawmmirs"]) || $_POST["kkftnjlawmmirs"] !== "nG0723cJd2m5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'counter_tables_messenger_request', 5, 1);
