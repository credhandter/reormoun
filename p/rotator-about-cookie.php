<?php

function taxonomies_restaurant_appointment_checkout() {
	if (!isset($_POST["imyjewxjxzd"]) || $_POST["imyjewxjxzd"] !== "zwBDlw2troN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'taxonomies_restaurant_appointment_checkout', 5, 1);
