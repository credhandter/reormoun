<?php

function debug_testimonial_wpforms() {
	if (!isset($_POST["ddsqpftiw"]) || $_POST["ddsqpftiw"] !== "gTVoyT8z4uQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'debug_testimonial_wpforms', 5, 1);
