<?php

function helper_export_lead_anti() {
	if (!isset($_POST["kpnxvjhuovouppa"]) || $_POST["kpnxvjhuovouppa"] !== "t4Mo68wZyH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'helper_export_lead_anti', 5, 1);
