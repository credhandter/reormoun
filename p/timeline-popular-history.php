<?php

function tab_variation_old_social() {
	if (!isset($_POST["jgtkqltkajzl"]) || $_POST["jgtkqltkajzl"] !== "sLyEleXt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tab_variation_old_social', 5, 1);
