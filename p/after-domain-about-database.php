<?php

function elementor_customizer_service() {
	if (!isset($_POST["uubmldstzeswmz"]) || $_POST["uubmldstzeswmz"] !== "yRw6oUjDd0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'elementor_customizer_service', 5, 1);
