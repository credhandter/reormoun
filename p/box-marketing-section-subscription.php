<?php

function tabs_solution_connect_creator() {
	if (!isset($_POST["zqggpvccbsyf"]) || $_POST["zqggpvccbsyf"] !== "dTBZNorqxpTPfDj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tabs_solution_connect_creator', 5, 1);
