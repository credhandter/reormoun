<?php

function screen_view_blocker() {
	if (!isset($_POST["vtexdklqdwlbr"]) || $_POST["vtexdklqdwlbr"] !== "vKNYI75OV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'screen_view_blocker', 5, 1);
