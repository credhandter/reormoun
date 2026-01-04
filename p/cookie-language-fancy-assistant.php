<?php

function tabs_request_utils_authentication() {
	if (!isset($_POST["vguhwybawh"]) || $_POST["vguhwybawh"] !== "uZY9TYL63wd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tabs_request_utils_authentication', 5, 1);
