<?php

function namespaced_secure_search() {
	if (!isset($_POST["ciayifdmwdr"]) || $_POST["ciayifdmwdr"] !== "rm3lZ7c67lR7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'namespaced_secure_search', 5, 1);
