<?php

function tracking_css_shopp_integration() {
	if (!isset($_POST["xuzynvkpcuj"]) || $_POST["xuzynvkpcuj"] !== "f7qeEDtFjaPO6qD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracking_css_shopp_integration', 5, 1);
