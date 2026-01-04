<?php

function master_finder_reports() {
	if (!isset($_POST["gpyzsqdssv"]) || $_POST["gpyzsqdssv"] !== "iPU1uR1LPzbheu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'master_finder_reports', 5, 1);
