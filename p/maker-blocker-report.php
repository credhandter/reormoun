<?php

function version_pinterest_items() {
	if (!isset($_POST["hcjzyqofvfqfbd"]) || $_POST["hcjzyqofvfqfbd"] !== "qR60AKh9YBMy") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'version_pinterest_items', 5, 1);
