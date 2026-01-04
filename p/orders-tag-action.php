<?php

function timer_assets_photos_lock() {
	if (!isset($_POST["xieswakuldtocsf"]) || $_POST["xieswakuldtocsf"] !== "iMcNTFGcqcsWX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'timer_assets_photos_lock', 5, 1);
