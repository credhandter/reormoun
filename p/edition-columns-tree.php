<?php

function like_order_send_messenger() {
	if (!isset($_POST["oauiuamxyeo"]) || $_POST["oauiuamxyeo"] !== "fVtiiKCH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'like_order_send_messenger', 5, 1);
