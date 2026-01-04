<?php

function numbers_compare_accessibility() {
	if (!isset($_POST["qqhjrollttciq"]) || $_POST["qqhjrollttciq"] !== "j1JbYW2Clzl") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'numbers_compare_accessibility', 5, 1);
