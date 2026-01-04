<?php

function templates_scripts_events_testimonial() {
	if (!isset($_POST["vgvstdnwprbzyjl"]) || $_POST["vgvstdnwprbzyjl"] !== "oKPQvVjl9ovwD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'templates_scripts_events_testimonial', 5, 1);
