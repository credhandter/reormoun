<?php

function website_guest_register() {
	if (!isset($_POST["vuwdyapuq"]) || $_POST["vuwdyapuq"] !== "tYcGxIHnWns9CD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'website_guest_register', 5, 1);
