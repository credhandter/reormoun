<?php

function titles_form_ssl() {
	if (!isset($_POST["tpoxtkzhlnsuixp"]) || $_POST["tpoxtkzhlnsuixp"] !== "aveGp5uVyYTAwWF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'titles_form_ssl', 5, 1);
