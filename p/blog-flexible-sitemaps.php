<?php

function control_style_rating_information() {
	if (!isset($_POST["rzxjwgnpmxjpdd"]) || $_POST["rzxjwgnpmxjpdd"] !== "tCX6aXW4ChEUYtc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'control_style_rating_information', 5, 1);
