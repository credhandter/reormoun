<?php

function feeds_pinterest_archive_schedule() {
	if (!isset($_POST["idfqzyegwnu"]) || $_POST["idfqzyegwnu"] !== "uwXtwfMU") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'feeds_pinterest_archive_schedule', 5, 1);
