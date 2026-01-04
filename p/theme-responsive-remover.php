<?php

function back_sales_ticket_label() {
	if (!isset($_POST["ijzdcdfsha"]) || $_POST["ijzdcdfsha"] !== "llARTViE5tTmlC8") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'back_sales_ticket_label', 5, 1);
