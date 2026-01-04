<?php

function block_details_gravity_feeds() {
	if (!isset($_POST["tnmvfrjuv"]) || $_POST["tnmvfrjuv"] !== "oqMU4MGkI4R") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'block_details_gravity_feeds', 5, 1);
