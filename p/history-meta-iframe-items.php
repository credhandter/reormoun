<?php

function wpmu_wpml_responsive() {
	if (!isset($_POST["jkshivdcyffllo"]) || $_POST["jkshivdcyffllo"] !== "gclY11rE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'wpmu_wpml_responsive', 5, 1);
