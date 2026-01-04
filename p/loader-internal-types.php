<?php

function age_ninja_schema_rate() {
	if (!isset($_POST["vseouwgtz"]) || $_POST["vseouwgtz"] !== "pjNTIOcq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'age_ninja_schema_rate', 5, 1);
