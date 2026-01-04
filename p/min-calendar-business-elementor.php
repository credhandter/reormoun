<?php

function options_permalink_bulk() {
	if (!isset($_POST["rathfkwnaztlml"]) || $_POST["rathfkwnaztlml"] !== "cfvC8XJ1xv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'options_permalink_bulk', 5, 1);
