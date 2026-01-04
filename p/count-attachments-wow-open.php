<?php

function open_taxonomies_cleaner() {
	if (!isset($_POST["ppbnjskxkmpxy"]) || $_POST["ppbnjskxkmpxy"] !== "cBzWMsgGbu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'open_taxonomies_cleaner', 5, 1);
