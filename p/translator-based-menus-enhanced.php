<?php

function nofollow_classic_jquery() {
	if (!isset($_POST["qcodgcgijyknw"]) || $_POST["qcodgcgijyknw"] !== "lh2NQWBx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'nofollow_classic_jquery', 5, 1);
