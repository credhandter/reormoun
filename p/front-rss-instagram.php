<?php

function forum_view_file_article() {
	if (!isset($_POST["loiuzlvwrqrpn"]) || $_POST["loiuzlvwrqrpn"] !== "r0TcbQfvbi64h") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'forum_view_file_article', 5, 1);
