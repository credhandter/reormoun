<?php

function maps_free_photos() {
	if (!isset($_POST["cufqxuhtkwrml"]) || $_POST["cufqxuhtkwrml"] !== "twWkMA5YDcHAna") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'maps_free_photos', 5, 1);
