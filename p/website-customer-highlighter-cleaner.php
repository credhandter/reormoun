<?php

function zoom_advanced_about_shortener() {
	if (!isset($_POST["xwsccrgm"]) || $_POST["xwsccrgm"] !== "t5v9DMVOV8g") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'zoom_advanced_about_shortener', 5, 1);
