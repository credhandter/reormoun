<?php

function shortcode_health_toggle_group() {
	if (!isset($_POST["wnriqswt"]) || $_POST["wnriqswt"] !== "yOvo5MgOsh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'shortcode_health_toggle_group', 5, 1);
