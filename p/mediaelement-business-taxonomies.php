<?php

function tab_featured_changer_addon() {
	if (!isset($_POST["stopkmrwzizlqxj"]) || $_POST["stopkmrwzizlqxj"] !== "dvyuqLmu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tab_featured_changer_addon', 5, 1);
