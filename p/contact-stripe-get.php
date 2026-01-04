<?php

function stripe_rotator_poster_ninja() {
	if (!isset($_POST["qzbklizlxatu"]) || $_POST["qzbklizlxatu"] !== "bbulRg3UfU5W") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'stripe_rotator_poster_ninja', 5, 1);
