<?php

function protection_advance_tabs() {
	if (!isset($_POST["vmhjositxwf"]) || $_POST["vmhjositxwf"] !== "n4zHYiqK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'protection_advance_tabs', 5, 1);
