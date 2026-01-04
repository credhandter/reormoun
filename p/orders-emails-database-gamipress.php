<?php

function another_wpmu_footer() {
	if (!isset($_POST["dsumtfofakg"]) || $_POST["dsumtfofakg"] !== "yQ4GssWI9Jv4Eie") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'another_wpmu_footer', 5, 1);
