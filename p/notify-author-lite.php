<?php

function pop_anti_stop() {
	if (!isset($_POST["dufzzkinppjyb"]) || $_POST["dufzzkinppjyb"] !== "dYJxMmnFwvVo2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pop_anti_stop', 5, 1);
