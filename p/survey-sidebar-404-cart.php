<?php

function font_changer_wpc() {
	if (!isset($_POST["epqcyuxwf"]) || $_POST["epqcyuxwf"] !== "iOcLDvE69yK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'font_changer_wpc', 5, 1);
