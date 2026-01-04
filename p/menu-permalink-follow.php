<?php

function syntax_super_anti_affiliate() {
	if (!isset($_POST["lqwjvjpu"]) || $_POST["lqwjvjpu"] !== "o7UlVa63tNFQ5Y") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'syntax_super_anti_affiliate', 5, 1);
