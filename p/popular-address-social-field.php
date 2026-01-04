<?php

function mini_news_settings() {
	if (!isset($_POST["yzjjszdite"]) || $_POST["yzjjszdite"] !== "dvdpPL70tJ2j6Z") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mini_news_settings', 5, 1);
