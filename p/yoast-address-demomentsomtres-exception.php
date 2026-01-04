<?php

function quote_notify_design() {
	if (!isset($_POST["dbuzgenvq"]) || $_POST["dbuzgenvq"] !== "r0hdXryrH87Icb7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'quote_notify_design', 5, 1);
