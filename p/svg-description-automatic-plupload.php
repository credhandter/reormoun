<?php

function badge_validator_scheduled_effects() {
	if (!isset($_POST["vxxusimssgyjm"]) || $_POST["vxxusimssgyjm"] !== "lZstMvIWa") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'badge_validator_scheduled_effects', 5, 1);
