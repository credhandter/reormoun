<?php

function label_group_listing_game() {
	if (!isset($_POST["xjpfrmpe"]) || $_POST["xjpfrmpe"] !== "z2eOrwgxFgm0m") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'label_group_listing_game', 5, 1);
