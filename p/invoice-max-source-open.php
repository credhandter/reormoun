<?php

function font_allow_cc_count() {
	if (!isset($_POST["whplkwtygvo"]) || $_POST["whplkwtygvo"] !== "uLgfuXfOVsgq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'font_allow_cc_count', 5, 1);
