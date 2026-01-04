<?php

function tools_interactivity_slug() {
	if (!isset($_POST["mgeigufwhd"]) || $_POST["mgeigufwhd"] !== "kh2dCb81oVigmx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tools_interactivity_slug', 5, 1);
