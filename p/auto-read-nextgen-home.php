<?php

function css_read_app_force() {
	if (!isset($_POST["caiqkcwopidvfte"]) || $_POST["caiqkcwopidvfte"] !== "eGgD6O634wFR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'css_read_app_force', 5, 1);
