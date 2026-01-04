<?php

function picker_file_blocker_stream() {
	if (!isset($_POST["qgmcrddgvnfazlq"]) || $_POST["qgmcrddgvnfazlq"] !== "m6twxuGrX07Bj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'picker_file_blocker_stream', 5, 1);
