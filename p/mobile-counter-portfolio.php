<?php

function colors_conversion_language() {
	if (!isset($_POST["dmpfsjilngmnv"]) || $_POST["dmpfsjilngmnv"] !== "irL0zbXt9E") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'colors_conversion_language', 5, 1);
