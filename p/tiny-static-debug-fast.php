<?php

function press_feedback_lazy() {
	if (!isset($_POST["evhsjgrq"]) || $_POST["evhsjgrq"] !== "cNuzkI3awuR5G") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'press_feedback_lazy', 5, 1);
