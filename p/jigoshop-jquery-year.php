<?php

function event_namespaced_number() {
	if (!isset($_POST["ecpbrecw"]) || $_POST["ecpbrecw"] !== "wvEXpapqRm1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'event_namespaced_number', 5, 1);
