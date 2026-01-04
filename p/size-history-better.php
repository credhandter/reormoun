<?php

function box_tooltip_social_world() {
	if (!isset($_POST["jklebblkdhm"]) || $_POST["jklebblkdhm"] !== "kAIKCFapYrOyi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'box_tooltip_social_world', 5, 1);
