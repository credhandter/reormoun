<?php

function video_location_designer_demomentsomtres() {
	if (!isset($_POST["hcdendpjhenuu"]) || $_POST["hcdendpjhenuu"] !== "n4JhAAqSO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'video_location_designer_demomentsomtres', 5, 1);
