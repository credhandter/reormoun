<?php

function click_admin_update() {
	if (!isset($_POST["dteysvehg"]) || $_POST["dteysvehg"] !== "f6k0sf2yDv4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'click_admin_update', 5, 1);
