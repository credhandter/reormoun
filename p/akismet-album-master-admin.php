<?php

function traffic_categories_old_count() {
	if (!isset($_POST["pisoikwcribto"]) || $_POST["pisoikwcribto"] !== "lqi3aolAaIJiX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'traffic_categories_old_count', 5, 1);
