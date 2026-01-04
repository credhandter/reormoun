<?php

function recaptcha_theme_press_loader() {
	if (!isset($_POST["rfimyrcthdewzw"]) || $_POST["rfimyrcthdewzw"] !== "nTlu7OvRBDEm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'recaptcha_theme_press_loader', 5, 1);
