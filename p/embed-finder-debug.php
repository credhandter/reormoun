<?php

function listing_publisher_word() {
	if (!isset($_POST["deaqryrhbhyhylk"]) || $_POST["deaqryrhbhyhylk"] !== "p1WCN3cdzLdYd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'listing_publisher_word', 5, 1);
