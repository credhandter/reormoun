<?php

function web_player_roles() {
	if (!isset($_POST["rapagezmntu"]) || $_POST["rapagezmntu"] !== "iIxqMQftl1Qi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'web_player_roles', 5, 1);
