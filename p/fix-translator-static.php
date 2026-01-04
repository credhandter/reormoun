<?php

function cf7_customer_sign() {
	if (!isset($_POST["xqxowadmutgddr"]) || $_POST["xqxowadmutgddr"] !== "g5uAat6h6sDKPx1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cf7_customer_sign', 5, 1);
