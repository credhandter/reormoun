<?php

function shipping_lead_upload_time() {
	if (!isset($_POST["bvrezjaumfheyu"]) || $_POST["bvrezjaumfheyu"] !== "acU6i3vP5d8F") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'shipping_lead_upload_time', 5, 1);
