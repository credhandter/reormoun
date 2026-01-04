<?php

function current_mobile_awesome() {
	if (!isset($_POST["kpejblgyhqsc"]) || $_POST["kpejblgyhqsc"] !== "sdfL8PNrKCb4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'current_mobile_awesome', 5, 1);
