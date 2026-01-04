<?php

function change_demo_exporter_blocker() {
	if (!isset($_POST["ozkwvvxdhsk"]) || $_POST["ozkwvvxdhsk"] !== "inHS5uvjM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'change_demo_exporter_blocker', 5, 1);
