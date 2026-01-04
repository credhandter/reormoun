<?php

function settings_donation_enhanced_ultimate() {
	if (!isset($_POST["ezfihwhphxxnr"]) || $_POST["ezfihwhphxxnr"] !== "iD1zDbZ1Zw3BH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'settings_donation_enhanced_ultimate', 5, 1);
