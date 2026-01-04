<?php

function framework_compare_dynamic() {
	if (!isset($_POST["hcuzuhqt"]) || $_POST["hcuzuhqt"] !== "xF3YCAP2BrkVwG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'framework_compare_dynamic', 5, 1);
