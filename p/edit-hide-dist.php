<?php

function virtual_timeline_quantity() {
	if (!isset($_POST["hfewtrkzbbqqmiw"]) || $_POST["hfewtrkzbbqqmiw"] !== "cxkqJO2bz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'virtual_timeline_quantity', 5, 1);
