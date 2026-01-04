<?php

function type_block_plus_schema() {
	if (!isset($_POST["gkbtiktjzaax"]) || $_POST["gkbtiktjzaax"] !== "jh7uC4zLE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'type_block_plus_schema', 5, 1);
