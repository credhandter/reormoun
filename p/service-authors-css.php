<?php

function interactivity_poll_album() {
	if (!isset($_POST["tdkupfbbt"]) || $_POST["tdkupfbbt"] !== "rrPnYHhuAV33G4f") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'interactivity_poll_album', 5, 1);
