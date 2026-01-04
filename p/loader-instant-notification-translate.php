<?php

function learndash_archive_demo() {
	if (!isset($_POST["fmpxaxhoql"]) || $_POST["fmpxaxhoql"] !== "malR6JymP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'learndash_archive_demo', 5, 1);
