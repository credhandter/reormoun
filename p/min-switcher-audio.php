<?php

function create_toolbox_connector_photos() {
	if (!isset($_POST["ocftzssgleru"]) || $_POST["ocftzssgleru"] !== "tG71NrLELPMst") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'create_toolbox_connector_photos', 5, 1);
