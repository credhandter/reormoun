<?php

function drop_blocker_counter() {
	if (!isset($_POST["rlqofbzmlzoe"]) || $_POST["rlqofbzmlzoe"] !== "vb7pTAgpVfGnoU3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'drop_blocker_counter', 5, 1);
