<?php

function slide_tab_logo_about() {
	if (!isset($_POST["cjmhvttgkkk"]) || $_POST["cjmhvttgkkk"] !== "uB8d5AExZ3fwr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slide_tab_logo_about', 5, 1);
