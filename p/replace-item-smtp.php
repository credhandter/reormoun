<?php

function clean_social_demomentsomtres() {
	if (!isset($_POST["ysuebwpjd"]) || $_POST["ysuebwpjd"] !== "jEWJg1pnAphfWo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'clean_social_demomentsomtres', 5, 1);
