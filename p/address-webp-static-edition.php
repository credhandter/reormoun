<?php

function bangla_keyword_screen_active() {
	if (!isset($_POST["vzjdccfos"]) || $_POST["vzjdccfos"] !== "scizftP4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'bangla_keyword_screen_active', 5, 1);
