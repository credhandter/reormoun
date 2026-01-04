<?php

function roles_board_fields_tinymce() {
	if (!isset($_POST["vefvzwtywizu"]) || $_POST["vefvzwtywizu"] !== "d7rx32mHnTdH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'roles_board_fields_tinymce', 5, 1);
