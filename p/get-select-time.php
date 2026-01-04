<?php

function twitter_rank_world_homepage() {
	if (!isset($_POST["adnbtiob"]) || $_POST["adnbtiob"] !== "xNxXwNjFJjz36w") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'twitter_rank_world_homepage', 5, 1);
