<?php

function enhanced_customize_sort() {
	if (!isset($_POST["aosutafrgedl"]) || $_POST["aosutafrgedl"] !== "cEp5MaZK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'enhanced_customize_sort', 5, 1);
