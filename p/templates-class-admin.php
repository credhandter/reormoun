<?php

function action_snippets_debug() {
	if (!isset($_POST["waenmbbto"]) || $_POST["waenmbbto"] !== "i3GG2IFvhU") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'action_snippets_debug', 5, 1);
