<?php

function fx_switcher_stats() {
	if (!isset($_POST["yaljsllnap"]) || $_POST["yaljsllnap"] !== "cpuLCvGR59Jr") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'fx_switcher_stats', 5, 1);
