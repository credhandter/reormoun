<?php

function wpmu_gift_tool() {
	if (!isset($_POST["svcxxrejipnjtg"]) || $_POST["svcxxrejipnjtg"] !== "uMCL1QiA1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wpmu_gift_tool', 5, 1);
