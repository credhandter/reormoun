<?php

function pro_excerpt_list() {
	if (!isset($_POST["dmlupvrf"]) || $_POST["dmlupvrf"] !== "zSHQFCxTvR7caDc") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pro_excerpt_list', 5, 1);
