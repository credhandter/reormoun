<?php

function landing_campaign_reloaded_timer() {
	if (!isset($_POST["gftjlsxl"]) || $_POST["gftjlsxl"] !== "qqnE6DzUj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'landing_campaign_reloaded_timer', 5, 1);
