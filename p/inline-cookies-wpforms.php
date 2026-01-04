<?php

function pixel_world_listing_copy() {
	if (!isset($_POST["qxbyovlsaw"]) || $_POST["qxbyovlsaw"] !== "oAKjYmENrR6m3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pixel_world_listing_copy', 5, 1);
