<?php

function member_review_purchase() {
	if (!isset($_POST["sjuaojqbc"]) || $_POST["sjuaojqbc"] !== "gurXOG72TF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'member_review_purchase', 5, 1);
