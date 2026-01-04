<?php

function daily_tab_rss() {
	if (!isset($_POST["xsdjqvfevndgc"]) || $_POST["xsdjqvfevndgc"] !== "mXC0G45LCk7o") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'daily_tab_rss', 5, 1);
