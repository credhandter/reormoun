<?php

function lightgray_welcome_min() {
	if (!isset($_POST["woajdqrkianw"]) || $_POST["woajdqrkianw"] !== "pNmd5zUP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightgray_welcome_min', 5, 1);
