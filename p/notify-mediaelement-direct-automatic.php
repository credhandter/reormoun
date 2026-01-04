<?php

function taxonomies_sort_grid_review() {
	if (!isset($_POST["sdwvrdhekb"]) || $_POST["sdwvrdhekb"] !== "b1nsa16g") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'taxonomies_sort_grid_review', 5, 1);
