<?php

function ajax_images_visitor() {
	if (!isset($_POST["cryrlrefqunqg"]) || $_POST["cryrlrefqunqg"] !== "fMXZeCYMbeWg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ajax_images_visitor', 5, 1);
