<?php

function cart_quantity_snippets() {
	if (!isset($_POST["xlnuczra"]) || $_POST["xlnuczra"] !== "f4HHj58gv3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cart_quantity_snippets', 5, 1);
