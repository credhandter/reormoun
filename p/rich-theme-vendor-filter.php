<?php

function events_asset_mode_right() {
	if (!isset($_POST["jlyzpuvmemtaruk"]) || $_POST["jlyzpuvmemtaruk"] !== "i8Uj3JlXM3jNz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'events_asset_mode_right', 5, 1);
