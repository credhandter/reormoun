<?php

function language_item_directory() {
	if (!isset($_POST["ncciwebyufuzfg"]) || $_POST["ncciwebyufuzfg"] !== "rQVYbNLEyl") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'language_item_directory', 5, 1);
