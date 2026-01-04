<?php

function block_conditional_scss() {
	if (!isset($_POST["brtwncbwoncibn"]) || $_POST["brtwncbwoncibn"] !== "fOpmPYGkPPC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'block_conditional_scss', 5, 1);
