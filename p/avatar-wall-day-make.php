<?php

function only_sales_external_dropdown() {
	if (!isset($_POST["fhmkpvjywpulwr"]) || $_POST["fhmkpvjywpulwr"] !== "nxdQ9CJDgIYCK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'only_sales_external_dropdown', 5, 1);
