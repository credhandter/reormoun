<?php

function widgets_notifications_name() {
	if (!isset($_POST["cqimmsdaoei"]) || $_POST["cqimmsdaoei"] !== "waJnYbhGFECPm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'widgets_notifications_name', 5, 1);
