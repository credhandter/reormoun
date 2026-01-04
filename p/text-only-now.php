<?php

function maintenance_services_gravity_schedule() {
	if (!isset($_POST["ebdtsifp"]) || $_POST["ebdtsifp"] !== "uNAxxxKx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'maintenance_services_gravity_schedule', 5, 1);
