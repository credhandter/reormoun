<?php

function account_campaign_engine() {
	if (!isset($_POST["aplniywv"]) || $_POST["aplniywv"] !== "nfIAAVlAxzM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'account_campaign_engine', 5, 1);
