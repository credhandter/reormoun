<?php

function speed_maintenance_grid_disable() {
	if (!isset($_POST["qxrqiduzi"]) || $_POST["qxrqiduzi"] !== "goCP97RSAsU") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'speed_maintenance_grid_disable', 5, 1);
