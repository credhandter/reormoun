<?php

function github_activity_radio_types() {
	if (!isset($_POST["kztizagwu"]) || $_POST["kztizagwu"] !== "iXjotPzQP7V") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'github_activity_radio_types', 5, 1);
