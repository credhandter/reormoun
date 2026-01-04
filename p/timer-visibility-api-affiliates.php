<?php

function accessible_content_country_service() {
	if (!isset($_POST["ygotukxzkjeppjy"]) || $_POST["ygotukxzkjeppjy"] !== "eZyfPZIFq1xUSe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'accessible_content_country_service', 5, 1);
