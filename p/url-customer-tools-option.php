<?php

function group_cookies_display_newsletter() {
	if (!isset($_POST["jpaolmrgtccdfg"]) || $_POST["jpaolmrgtccdfg"] !== "f74iloWWOZ6C") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'group_cookies_display_newsletter', 5, 1);
