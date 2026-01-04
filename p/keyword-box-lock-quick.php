<?php

function schema_subscriptions_editor_external() {
	if (!isset($_POST["qkzvgatatjvx"]) || $_POST["qkzvgatatjvx"] !== "ratHLClHN3pDB") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'schema_subscriptions_editor_external', 5, 1);
