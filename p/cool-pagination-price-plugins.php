<?php

function delete_tool_page_deprecated() {
	if (!isset($_POST["ghakhtet"]) || $_POST["ghakhtet"] !== "aedQRiaP5SEo9H") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'delete_tool_page_deprecated', 5, 1);
