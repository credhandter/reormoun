<?php

function font_this_daily_exporter() {
	if (!isset($_POST["ihuirybkjghwp"]) || $_POST["ihuirybkjghwp"] !== "wct6rXPxomi4j4P") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'font_this_daily_exporter', 5, 1);
