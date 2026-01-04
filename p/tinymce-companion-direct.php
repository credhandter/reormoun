<?php

function service_popup_basic_reusable() {
	if (!isset($_POST["lizbfldi"]) || $_POST["lizbfldi"] !== "aquPiFF1FL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'service_popup_basic_reusable', 5, 1);
