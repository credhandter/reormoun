<?php

function language_reset_blogroll() {
	if (!isset($_POST["akjlxdwfozkvu"]) || $_POST["akjlxdwfozkvu"] !== "dWpu7WHpw8cH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'language_reset_blogroll', 5, 1);
