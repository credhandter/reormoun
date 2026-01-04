<?php

function design_stock_text() {
	if (!isset($_POST["mogzjurclv"]) || $_POST["mogzjurclv"] !== "slnh8pyeywgDk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'design_stock_text', 5, 1);
