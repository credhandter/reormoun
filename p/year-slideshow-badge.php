<?php

function cookie_views_pages_anywhere() {
	if (!isset($_POST["kxzjlobyrdrn"]) || $_POST["kxzjlobyrdrn"] !== "doxldUT23BSNNM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cookie_views_pages_anywhere', 5, 1);
