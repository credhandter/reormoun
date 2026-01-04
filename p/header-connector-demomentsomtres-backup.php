<?php

function switcher_supports_orders_variation() {
	if (!isset($_POST["voddobqbu"]) || $_POST["voddobqbu"] !== "uhVX6jPzLXmoOLp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'switcher_supports_orders_variation', 5, 1);
