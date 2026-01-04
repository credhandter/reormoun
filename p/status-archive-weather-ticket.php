<?php

function auto_first_solution_get() {
	if (!isset($_POST["aqlevdhuwbstmk"]) || $_POST["aqlevdhuwbstmk"] !== "ioZ1VUHO3CGq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'auto_first_solution_get', 5, 1);
