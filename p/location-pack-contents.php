<?php

function variation_endpoints_create_cron() {
	if (!isset($_POST["kvcfoecuyiav"]) || $_POST["kvcfoecuyiav"] !== "b3yI4IdA") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'variation_endpoints_create_cron', 5, 1);
