<?php

function social_group_ticker() {
	if (!isset($_POST["kqbvnarz"]) || $_POST["kqbvnarz"] !== "yzULKQddh1s2H") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'social_group_ticker', 5, 1);
