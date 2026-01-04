<?php

function blocks_redirect_only_mini() {
	if (!isset($_POST["zhiolcbafbcepn"]) || $_POST["zhiolcbafbcepn"] !== "xfYQxAhoQj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'blocks_redirect_only_mini', 5, 1);
