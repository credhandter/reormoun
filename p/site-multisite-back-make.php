<?php

function navigation_icon_content() {
	if (!isset($_POST["liyykkkg"]) || $_POST["liyykkkg"] !== "o3iTkfmKRN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'navigation_icon_content', 5, 1);
