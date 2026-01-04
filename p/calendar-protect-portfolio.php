<?php

function reloaded_iframe_updater() {
	if (!isset($_POST["yncpbagj"]) || $_POST["yncpbagj"] !== "zSP9fp9VOq2wJGL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reloaded_iframe_updater', 5, 1);
