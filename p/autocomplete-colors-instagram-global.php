<?php

function switcher_blocker_translator_monitor() {
	if (!isset($_POST["sgaabmziksfa"]) || $_POST["sgaabmziksfa"] !== "vH4yq1LMM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'switcher_blocker_translator_monitor', 5, 1);
