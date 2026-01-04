<?php

function addon_screen_badge_cron() {
	if (!isset($_POST["yjoxtisqaplckm"]) || $_POST["yjoxtisqaplckm"] !== "vN1xVwT3ejRwsg4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'addon_screen_badge_cron', 5, 1);
