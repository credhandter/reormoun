<?php

function cache_press_youtube() {
	if (!isset($_POST["wwpobwxh"]) || $_POST["wwpobwxh"] !== "vlwoq6okkpANL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cache_press_youtube', 5, 1);
